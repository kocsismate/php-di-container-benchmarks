output "dns" {
  value = "${aws_instance.ec2_instance.public_dns}"
}
