# SSP 2 Booking system presumably
## Hotel Boking Core System to be built with laravel

Clone the repository and run the following commands

```sh
cd ssp-2
npm install
npm run prod
php artisan db:wipe
php artisan migrate
php artisan db:seed
php artisan serve
```

Final step copy and paste the contents in the .env.example to .env and change the database path
