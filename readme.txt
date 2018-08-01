Projekto paleidimas

1. nusiklonuojam projekta;

Terminale:
2. Composer install;
3. susikuriam duonbaze;
4. .env faile laukeliuose pakeiciam: (DB_DATABASE="duonbazes pavadinimas"), (DB_USERNAME="userneimas"), (DB_PASSWORD="slaptazodis");
5. php artisan migrate;
6. php artisan db:seed --class=UserSeeder;