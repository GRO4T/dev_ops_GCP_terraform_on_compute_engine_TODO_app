# TODO List
Simple TODO application written in PHP with data stored in JSON.
The goal was to keep things simple.

## SonarCloud project
<https://sonarcloud.io/project/overview?id=GRO4T_todo-list/>

## Super Linter Status Badge
[![GitHub Super-Linter](https://github.com/GRO4T/todo-list/workflows/Lint%20Code%20Base/badge.svg)](https://github.com/marketplace/actions/super-linter)

## Tech Stack
* PHP, HTML, CSS
* Super Linter <https://github.com/marketplace/actions/super-linter/>
* GitHub Actions
* Terraform on Google Cloud
* Google Cloud Compute Engine
* Google Cloud Operations (formerly Stackdriver)
* Python Selenium
* PHP Code Sniffer

## TODO
Now
* add precommit action that runs 'terraform fmt'
* app deployment using ansible playbook
* precommit action that runs super linter?
* write article on Medium on how to use GitHub actions, with GCE and ansible

## Resources
Google Compute Engine GitHub Actions example
<https://github.com/google-github-actions/setup-gcloud/blob/main/example-workflows/gce/.github/workflows/gce.yaml/>