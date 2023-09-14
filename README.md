<p align="center"><img src="https://user-images.githubusercontent.com/26076138/151306080-0dc7d50b-f76b-48cd-8917-b9d84d6f8f9e.png"></p>

## About Laravel 8 CRUD

Creating CRUD (CREATE, READ, UPDATE, DELETE) Applications using Laravel 8 combined with Tailwind CSS 

# Installations

copy .env.example .env or (linux command) cp .env.example .env

    composer update
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan serve 
    
(See Project) http://127.0.0.1:8000/posts

# Make Seeder Database Step

    php artisan make:seeder ProductsTableSeeder

Edit file ProductsTableSeeder
    
    <?php
    namespace Database\Seeders;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    
    class ProductsTableSeeder extends Seeder
    {
        public function run()
        {
            $posts = [
                ['title' => 'Andre', 'description' => 'Product Test'],
                ['title' => 'Lida', 'description' => 'Product Test'],
                ['title' => 'Pasia', 'description' => 'Product Test'],
                // Add more records as needed
            ];
            DB::table('posts')->insert($posts);
        }
    }    
    
ProductsTableSeeder.php in the database/seeders directory.
    
    php artisan db:seed --class=ProductsTableSeeder
    php artisan db:seed
    
Let's See!
