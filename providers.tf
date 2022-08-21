provider "google" {
  project = "sandbox-351818"
  region  = "us-central1"
}

terraform {
  backend "gcs" {
    bucket = "sandbox-351818-tf-state"
    prefix = "terraform/state"
  }
}