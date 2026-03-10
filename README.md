# PHP SMTP Mailer 📧

A simple PHP mailer using PHPMailer library to send emails via SMTP.

## Features
- Send HTML emails via SMTP
- Gmail & Custom Domain support
- TLS encryption
- Easy to configure

## Requirements
- PHP 7.0 or higher
- PHPMailer library
- SMTP credentials (Gmail or cPanel)

## Installation

1. Clone the repository
   git clone https://github.com/ShahidRazaPro/PHPMailer.git

2. Navigate to project folder
   cd php-smtp-mailer

3. Make sure PHPMailer-master folder is inside project root

## Configuration

Open mail.php and update these values:

   $mail->Host     = 'smtp.gmail.com';         // SMTP Host
   $mail->Username = 'your@gmail.com';          // Your Email
   $mail->Password = 'your_app_password';       // App Password
   $mail->setFrom('your@gmail.com', 'Your Name');
   $mail->addAddress('recipient@example.com');  // Receiver Email

## Usage

Run the file in browser:
   http://localhost/php-smtp-mailer/mail.php

## Gmail Setup

1. Enable 2-Step Verification on Gmail
2. Go to: https://myaccount.google.com/apppasswords
3. Generate App Password
4. Use that password in $mail->Password

## Folder Structure

   php-smtp-mailer/
   ├── PHPMailer-master/
   │   └── src/
   │       ├── PHPMailer.php
   │       ├── SMTP.php
   │       └── Exception.php
   ├── mail.php
   └── README.md

## Author
Shahid Raza
GitHub: https://github.com/ShahidRazaPro

## License
MIT License
