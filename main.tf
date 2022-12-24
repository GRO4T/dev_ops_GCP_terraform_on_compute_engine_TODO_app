resource "google_compute_instance" "todo-list-vm" {
  name         = var.gce_instance_name
  machine_type = var.gce_machine_type
  zone         = var.gcp_zone

  tags = ["http-server"]

  boot_disk {
    initialize_params {
      image = "debian-cloud/debian-11"
    }
  }

  network_interface {
    network = "default"

    access_config {
      # Include this section to give the VM an external IP address
    }
  }

  metadata_startup_script = <<SCRIPT
  #!/bin/bash
  sudo apt update -y
  sudo apt upgrade -y
  SCRIPT
}

resource "google_compute_firewall" "default" {
  name    = "allow-http"
  network = "default"

  allow {
    protocol = "tcp"
    ports    = ["80"]
  }

  target_tags = ["http-server"]
}