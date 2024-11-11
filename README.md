# Project Overview

Victortrade is a comprehensive investment platform that enables users to invest and earn returns on their investments. Built with the Laravel framework, Victortrade was inspired by a client's project request, bringing valuable insights into solving real-world problems within an investment platform. Key functionalities include KYC verification, ticketing systems, manual payment processing, a referral system, extensive testing, and robust admin controls.

## Demo
You can view the demo of the application using the following link; `http://localhost:8000`

**Demo Admin Credentials**
1. Email: cekom45565@anypng.com,    Password: test@123

**Demo User Credentials**
1. Name: Makin,     Email: makin@tester.com,     Password: test@123
2. Name: Aisha,     Email: aisha@tester.com,     Password: pass1234
3. Name: Kemi,      Email: kemi@tester.com,      Password: password123
4. Name: James,     Email: james@tester.com,     Password: securePass123
5. Name: Sarah,     Email: sarah@tester.com,     Password: mypass5678

## Features

- **Investment Management**: Customers can easily invest and track returns.
- **KYC (Know Your Customer)**: Ensures customer identity verification.
- **Manual Payment Resolution / Fulfilment**: Provides a dashboard to manage user payment manually.
- **Referral System**: Incentivizes users to refer others and earn rewards.
- **Admin Functions**: Extensive control panel for admins to manage platform operations.
  
## Technology Used

- PHP
- Laravel
- JavaScript
- HTML
- CSS

## Installation

To get started with Victortrade, follow these steps:

1. **Clone the Repository**

```bash
   git clone https://github.com/yourusername/victortrade.git
   cd victortrade
```

2. **Install Dependencies**

Install PHP dependencies with Composer:

```bash
composer install
```


3. **Set Up Environment**

Copy the `.env.example` file to `.env` and update the necessary environment variables:
```bash
cp .env.example .env php artisan key:generate
```

4. **Run Database Migrations and Seed Data**

Run migrations and seed the database to set up the initial data:

```bash
php artisan migrate --seed

```

5. **Run the Application**

Start the Laravel development server:

```bash
php artisan serve
```

6. **Access the Application**

Open your browser and navigate to `http://localhost:8000`.

## Acknowledgments

This project was a rewarding experience that deepened my understanding of handling real-world scenarios in investment platforms, particularly in areas like KYC verification, payment management, and system testing.