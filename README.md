# TODO List
Simple TODO application written in PHP hosted on Google Cloud Compute Engine.

## Tech Stack
### Application
* PHP, HTML, CSS
### Infrastructure
* Google Cloud Compute Engine
* Google Cloud Operations
* DNS hosted on https://www.noip.com/
### CI/CD
* GitHub Actions
* Ansible
* Super Linter <https://github.com/marketplace/actions/super-linter/>
* Terraform on Google Cloud

## CI/CD pipeline steps
1. Run Super Linter.
2. Create GCE instance using Terraform.
3. Copy runner SSH keys to GCE instance.
4. Setup the VM using Ansible playbook.
5. Deploy website using Ansible playbook.

## TODO
* add precommit action that runs 'terraform fmt'
* precommit action that runs super linter?
* write article on Medium on setting up Github Runner to run ansible playbook against GCE instance

## Resources
Google Compute Engine GitHub Actions example
<https://github.com/google-github-actions/setup-gcloud/blob/main/example-workflows/gce/.github/workflows/gce.yaml/>