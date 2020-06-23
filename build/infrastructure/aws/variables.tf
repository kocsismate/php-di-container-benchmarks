variable "project_root" {}

variable "ssh_key_name" {}

variable "ssh_private_key" {}

variable "region" {}

variable "instance_type" {}

variable "image_name" {
  default = "ubuntu-bionic-18.04-amd64-server"
}

variable "docker_compose_version" {
  default = "1.26.0"
}
