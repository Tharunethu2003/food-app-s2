<?php

namespace Database\Seeders;

use App\Models\MealKit;
use Illuminate\Database\Seeder;

class MealKitSeeder extends Seeder
{
   
public function run()
{
    MealKit::create([
        'name' => 'Caprese Salad',
        'description' => 'A refreshing Italian salad with tomatoes, mozzarella, basil, and balsamic dressing.',
        'price' => 120.00,
        'picture' => 'meal-kits/caprese-salad.jpg',
        'ingredients' => 'Tomatoes, Mozzarella, Basil, Balsamic Dressing',
        'category' => 'Vegetarian',
        'tags' => 'Salad, Italian, Healthy',
    ]);

    MealKit::create([
        'name' => 'Chocolate Lava Cake',
        'description' => 'A decadent molten chocolate cake with a rich, gooey center.',
        'price' => 850.00,
        'picture' => 'meal-kits/chocolate-lava-cake.jpg',
        'ingredients' => 'Chocolate, Butter, Sugar, Eggs, Flour',
        'category' => 'Non-Veg',
        'tags' => 'Dessert, Chocolate, Cake',
    ]);

    MealKit::create([
        'name' => 'Chicken Alfredo Pizza',
        'description' => 'A creamy chicken Alfredo sauce topped with mozzarella on a pizza crust.',
        'price' => 2000.00,
        'picture' => 'meal-kits/chicken-alfredo-pizza.jpg',
        'ingredients' => 'Chicken, Alfredo Sauce, Mozzarella, Pizza Dough',
        'category' => 'Non-Veg',
        'tags' => 'Pizza, Chicken, Creamy',
    ]);

    MealKit::create([
        'name' => 'Quinoa Salad with Chickpeas and Avocado',
        'description' => 'A nutritious salad made with quinoa, chickpeas, and avocado.',
        'price' => 150.00,
        'picture' => 'meal-kits/quinoa-salad.jpg',
        'ingredients' => 'Quinoa, Chickpeas, Avocado, Lemon, Olive Oil',
        'category' => 'Vegetarian',
        'tags' => 'Salad, Quinoa, Healthy',
    ]);

    MealKit::create([
        'name' => 'Spaghetti Carbonara',
        'description' => 'A classic Italian pasta dish with eggs, cheese, pancetta, and pepper.',
        'price' => 1800.00,
        'picture' => 'meal-kits/spaghetti-carbonara.jpg',
        'ingredients' => 'Spaghetti, Eggs, Cheese, Pancetta, Pepper',
        'category' => 'Non-Veg',
        'tags' => 'Pasta, Italian, Cheese',
    ]);
}

    }
