resource "google_compute_instance" "todo-list-vm" {
  name         = "todo-list-instance"
  machine_type = "f1-micro"
  zone         = "us-central1-a"

  tags = ["http-server"]

  boot_disk {
    initialize_params {
      image = "debian-cloud/debian-11"
    }
  }

  network_interface {
    network = "default"
  }

  metadata_startup_script = <<SCRIPT
  #!/bin/bash
  sudo apt update -y
  sudo apt upgrade -y
  SCRIPT
}