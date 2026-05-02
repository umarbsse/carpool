# Carpool Web App

A Laravel-based carpool management application for registering drivers and passengers, publishing rides, registering driver vehicles, and booking seats on available trips.

The project uses Laravel 12, MariaDB/MySQL, Vite, Tailwind CSS, AdminLTE assets, custom session-based authentication, database queues, and seeded lookup data for locations, vehicles, statuses, and payment methods.

## Features

- Public home, signup, login, logout, and password reset screens.
- Session-based authentication for passenger and driver access.
- Driver ride management with start location, destination, schedule, seat capacity, and assigned vehicle.
- Driver vehicle registration with vehicle model, registration province, registration year, and plate number.
- Passenger seat booking with duplicate-seat protection for confirmed bookings.
- Booking list with passenger, ride, payment status, and booking status details.
- Location management for provinces, districts, tehsils, latitude, longitude, and enabled/disabled states.
- Account settings and password change screens.
- Request logging middleware that stores device, browser, route, payload, and response status data.
- Queue-ready mail structure for welcome emails and other background mail jobs.

## Tech Stack

- PHP 8.2+
- Laravel 12
- MariaDB/MySQL
- Composer
- Node.js and npm
- Vite 7
- Tailwind CSS 4
- AdminLTE frontend assets
- Jenssegers Agent for request/device logging

## Requirements

Make sure these are installed before setup:

- PHP 8.2 or newer
- Composer
- Node.js and npm
- MariaDB or MySQL
- A local web stack such as WAMP, XAMPP, Laravel Herd, Laragon, or Laravel Sail

## Installation

Clone the project, then install PHP and JavaScript dependencies:

```bash
composer install
npm install
```

Create the environment file and generate the app key:

```bash
cp .env.example .env
php artisan key:generate
```

On Windows PowerShell, use this instead of `cp`:

```powershell
Copy-Item .env.example .env
php artisan key:generate
```

Create a database named `carpool`, then update `.env`:

```env
APP_NAME="Carpool"
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=carpool
DB_USERNAME=root
DB_PASSWORD=

QUEUE_CONNECTION=database
MAIL_MAILER=log
```

Run migrations and seed the starter data:

```bash
php artisan migrate --seed
```

The seeders add roles, geo locations, config values, sample users, driver/passenger tables, vehicle types, vehicle models, ride statuses, booking statuses, payment statuses, and payment methods.

## Running the App

Start Laravel, the queue listener, and Vite together:

```bash
composer run dev
```

Or run each service in a separate terminal:

```bash
php artisan serve
npm run dev
php artisan queue:listen --tries=1
```

Open the app at:

```text
http://127.0.0.1:8000
```

For production assets:

```bash
npm run build
```

## Main Routes

| Route | Purpose |
| --- | --- |
| `/` | Public home page |
| `/signup` | Registration page |
| `/login` | Login page |
| `/forgotpassword` | Password reset request page |
| `/dashboard` | Authenticated dashboard |
| `/ride_list` | Ride list |
| `/add_ride` | Create a new ride |
| `/book_seat/{ride_token}` | Book seats for a ride |
| `/booking` | Booking list |
| `/add_vehicle` | Register a driver vehicle |
| `/vehicle_list` | Driver vehicle list |
| `/location_list` | Location management |
| `/setting` | Account settings |
| `/change_password` | Account password change |

Authenticated routes are protected by the custom `auth_middleware` group in `bootstrap/app.php`.

## Database Overview

Important application tables include:

- `users`, `users_driver`, and `users_passenger` for account data.
- `roles` for role reference data.
- `geo_location` for provinces, districts, and tehsils.
- `vehicles_types`, `vehicles`, `vehicles_reg_geo_locations`, and `driver_vehicles` for vehicle records.
- `ride` and `ride_status` for published rides.
- `ride_bookings`, `ride_booking_status`, and `payment_status` for seat reservations.
- `transactions_passenger`, `transactions_driver`, and `payment_method` for wallet/payment data.
- `request_logs` for global request logging.
- Laravel `jobs`, `failed_jobs`, `sessions`, and cache tables for framework services.

## Mail and Queues

The app is configured to use the database queue by default:

```env
QUEUE_CONNECTION=database
```

During local development, mail is logged instead of sent:

```env
MAIL_MAILER=log
```

Run the queue worker when testing queued mail or background jobs:

```bash
php artisan queue:listen --tries=1
```

Welcome mail-related classes live in:

- `app/Mail/WelcomeMail.php`
- `app/Jobs/Auth/SendWelcomeEmailJob.php`
- `app/Listeners/Auth/SendWelcomeEmail.php`

## Useful Commands

```bash
php artisan migrate
php artisan migrate:fresh --seed
php artisan db:seed
php artisan route:list
php artisan cache:clear
php artisan config:clear
php artisan test
npm run dev
npm run build
```

Composer also includes helper scripts:

```bash
composer run setup
composer run dev
composer run test
```

## Project Structure

```text
app/
  Actions/Auth/        Registration action flow
  Events/Auth/         Auth events
  Helpers/             Global helper functions
  Http/Controllers/    Page and workflow controllers
  Http/Middleware/     Custom auth and request logging middleware
  Jobs/Auth/           Queued auth/mail jobs
  Listeners/Auth/      Event listeners
  Mail/                Mailable classes
  Models/              Eloquent and database helper models

database/
  migrations/          Database schema
  seeders/             Starter and lookup data

resources/
  views/               Blade views for public and AdminLTE templates
  css/                 Frontend styles

routes/
  web.php              Web routes
```

## Development Notes

- The private dashboard template defaults to `admin_lte`.
- The public template defaults to `basic`.
- `LogRequests` is global middleware, so the database must be migrated before browsing the app.
- Seat booking uses a transaction and row locking to reduce double-booking risk.
- The current authentication flow uses custom session helpers instead of Laravel Breeze, Jetstream, or Fortify.

## License

This project is based on the Laravel application skeleton and follows the license chosen by the project owner.
