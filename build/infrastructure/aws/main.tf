terraform {
  required_version = "~>0.12.26"
  backend "local" {
    path = "./terraform.tfstate"
  }
}

provider "aws" {
  version = "~>2.67"
  region = var.region
}

resource "aws_instance" "ec2_instance" {
  ami = data.aws_ami.ubuntu.image_id
  instance_type = var.instance_type
  associate_public_ip_address = true
  key_name = var.ssh_key_name
  vpc_security_group_ids = [aws_security_group.security_group.id]
  monitoring = false

  tags = {
    Name = "php-di-benchmark"
  }

  connection {
    type = "ssh"
    host = aws_instance.ec2_instance.public_ip
    user = "ubuntu"
    private_key = file(format("%s/%s", "../config", var.ssh_private_key))
    agent = true
  }

  provisioner "local-exec" {
    command = <<EOF
      set -e

      cd ${var.project_root}
      BRANCH=`git rev-parse --abbrev-ref HEAD`
      git archive --format tar -o ${var.project_root}/var/archive.tar $BRANCH
EOF
  }

  provisioner "file" {
    source = "${var.project_root}/var/archive.tar"
    destination = "/tmp/archive.tar"
  }

  provisioner "remote-exec" {
    inline = [
      "set -e",

      "# Update system packages",
      "sudo apt-get update",
      "sudo apt-get -y install git curl",

      "# Install Docker",
      "sudo curl -fsSL https://get.docker.com/ | sh",

      "# Install Docker Compose",
      "sudo curl -L https://github.com/docker/compose/releases/download/${var.docker_compose_version}/docker-compose-`uname -s`-`uname -m` > /tmp/docker-compose",
      "sudo mv /tmp/docker-compose /usr/local/bin/docker-compose",
      "sudo chmod +x /usr/local/bin/docker-compose",

      "docker -v",
      "docker-compose --version",
    ]
  }

  provisioner "remote-exec" {
    inline = [
      "set -e",

      "# Update permissions",
      "sudo mkdir -p /var/www/",
      "sudo rm -Rf /var/www/*",
      "sudo chmod -R 755 /var/www",

      "# Change directory",
      "cd /var/www/",

      "# Unzip the archive",
      "sudo tar -xf /tmp/archive.tar",

      "# Create the config file",
      "sudo cp .env.dist .env",

      "# Install composer dependencies",
      "sudo docker run --rm --interactive --tty --volume $PWD:/code composer install --prefer-dist --no-dev --no-suggest --no-interaction --working-dir=/code --ignore-platform-reqs",

      "# Build DI containers",
      "sudo docker-compose run --no-deps benchmark-fpm /code/bin/benchmark build",

      "# Dump autoloader",
      "sudo docker run --rm --interactive --tty --volume $PWD:/code composer dump-autoload --classmap-authoritative --no-interaction --working-dir=/code",

      "# Run the server",
      "sudo docker-compose -f docker-compose.aws.yml up -d",
    ]
  }
}

data "aws_ami" "ubuntu" {
  most_recent = true
  owners = ["099720109477"]

  filter {
    name = "virtualization-type"
    values = ["hvm"]
  }

  filter {
    name = "architecture"
    values = ["x86_64"]
  }

  filter {
    name = "image-type"
    values = ["machine"]
  }

  filter {
    name = "name"
    values = ["ubuntu/images/hvm-ssd/${var.image_name}-*"]
  }
}

resource "aws_security_group" "security_group" {
  name = "php-di-benchmark"

  egress {
    from_port = 0
    to_port = 0
    protocol = "-1"
    cidr_blocks = [
      "0.0.0.0/0"]
  }

  ingress {
    from_port = 0
    to_port = 0
    protocol = "-1"

    cidr_blocks = [
      "0.0.0.0/0"]
  }
}
