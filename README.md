# Tasks for Today Management System

A Laravel application created for IT0049 Technical Summative Assessment 3.

## Developer

Your Full Name

## Features

- Welcome page showing tasks scheduled for today
- Task List page showing all tasks ordered by date
- Profile page showing the seeded user
- About page identifying the developer

## Requirements

- PHP 8.3 or newer with the extensions required by Laravel
- Composer
- SQLite support for PHP

## Local setup

1. Clone this repository and open a terminal in the project folder.
2. Run `composer install`.
3. Copy `.env.example` to `.env`.
4. Set `DB_CONNECTION=sqlite` in `.env`.
5. Create an empty file named `database/database.sqlite`.
6. Run `php artisan key:generate`.
7. Run `php artisan migrate --seed`.
8. Run `php artisan serve`.
9. Open the local URL shown in the terminal.

The seeder creates eight tasks relative to the date it is run and one
sample user. The Welcome page uses the application time zone, Asia/Manila.

## Hosted application
https://it0049-technical-assessment-3-production.up.railway.app/