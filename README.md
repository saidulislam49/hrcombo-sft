composer update
cp .env.example .env
php artisan key:generate
configure database on .env file(create a database and give database credential)
php artisan migrate
php artisan db:seed
npm install npm run dev php artisan serve
