## Link and Match 2019

# Integrasi Web

- 1. Extract vendor.zip
- 2. Rename .env.example menjadi .env dan sesuaikan localhostnya
- 3. Buka command line dan jalankan
```
php artisan key:generate
```
- 4. Jalankan composer pada project lima
```
composer require nwidart/laravel-modules
```
- 5. Jalankan artisan pada project lima
```
php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
```
- 6. Jalankan composer lagi
```
composer dump-autoload
```
- 7. Buat database dblima
- 8. Import database dari file lima/database/dblima.sql

- Referensi : https://nwidart.com/laravel-modules/v4/basic-usage/creating-a-module