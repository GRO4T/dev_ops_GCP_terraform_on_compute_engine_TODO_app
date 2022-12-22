variable "gcp_project_id" {
    type = string
}

variable "gcp_region" {
    type = string
    default = "us-central1"
}

variable "gcp_zone" {
    type = string
    default = "us-central1-a"
}

variable "gce_instance_name" {
    type = string
    default = "todo-list-instance"
}

variable "gce_machine_type" {
    type = string
    default = "e2-micro"
}