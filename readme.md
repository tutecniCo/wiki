[![Build Status](https://travis-ci.org/zeeshanu/opus.svg?branch=master)](https://travis-ci.org/zeeshanu/opus)
[![GitHub release](https://img.shields.io/github/release/zeeshanu/opus.svg)](https://github.com/zeeshanu/opus)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/zeeshanu/opus.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=%5Bobject%20Object%5D)
> Opensource knowledge base application for Teams

Opus is a place for your team to document who you are, what you do and how you do it. It helps you create and maintain a knowledge base for your teams.

## Features

* Create manage Wikis (group of knowledge pages)
* Create nested pages inside wikis
* Manage wikis and pages by spaces and tags
* Invite employees by email
* Powerful ACL to assign different roles and permissions to employees.
* Slack notifications for the wiki updates
* Mark wikis and pages as favorite
* Watch wiki/pages to get notified
* In-app notifications
* Discussions using comments
* Create reusable page templates
* Search across the knowledge base
* ..and more

## Requirements

* PHP 7.0+
* MySQL 5+

## Installation

- Clone the repository
  ```bash
  git clone https://github.com/zeeshanu/opus.git
  ```
- Create `.env` using `.env.dist` and populate the relevant information
- Install the dependencies
  ```bash
  composer install
  ```
- Open the project directory and run the below
  ```bash
  php artisan migrate
  ``` 
- Generate an application key
  ```bash
  php artisan key:generate
  ```
- Run the database seeder
  ```bash
  php artisan db:seed
  ```

## License
The license holder is allowed to use the software for free, as long as they don't make money using it. [Read more in License](https://github.com/zeeshanu/opus/blob/master/LICENSE.md)
