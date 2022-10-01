terraform {
  backend "gcs" {
    bucket = "sandbox-351818-tf-state"
    prefix = "terraform/state"
  }

  required_providers {
    google = {
      source  = "hashicorp/google"
      version = "~> 4.34.0"
    }
  }
}

provider "google" {
  project = "sandbox-351818"
  region  = "us-central1"
}