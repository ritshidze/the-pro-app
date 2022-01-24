# the-pro-app

Simple instruction to run this APP.

PHP   >= 7.4.26
MySQL >= 5.1

1. git clone https://github.com/ritshidze/the-pro-app.git

   - composer install
   - composer dump-autoload

2. create a database table 
3. Setup mailtrap details

    - MAIL_MAILER=smtp
    - MAIL_HOST=smtp.mailtrap.io
    - MAIL_PORT=2525
    - MAIL_USERNAME=********
    - MAIL_PASSWORD=********
    - MAIL_ENCRYPTION=tls
    - MAIL_FROM_ADDRESS=****@gmail.com

4. Run Migration: php artisan migrate 
5. Run Seeder: php artisan db:seed
6. Run the app

  - it will take you straight to login
  - use email: john@doe.com and password: mypassword

7. Land in Dashbored. Create people and stuff.  
