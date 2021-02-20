
### For start program
php artisan serve 

composer install 

npm install && npm run dev
npm run watch

composer update 

add db data to .env

php artisan migrate

### Create default admin
php artisan db:seed --class=AdminTableSeeder

### For Nova
php artisan nova:install
php artisan migrate

### Local url to admin site
http://127.0.0.1:8000/nova

## Default admin
email: admin@gmail.com
pass: adminadmin

