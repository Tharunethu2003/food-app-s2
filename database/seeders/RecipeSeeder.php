<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        Recipe::create([
            'name' => 'Caprese Salad',
            'description' => 'A refreshing Italian salad with tomatoes, mozzarella, basil, and balsamic dressing.',
            'price' => 120.00,
            'picture' => 'storage/images/caprese-salad.jpg',
            'ingredients' => json_encode(['Tomatoes', 'Mozzarella', 'Basil', 'Balsamic Dressing']),
            'category' => 'Vegetarian',
            'tags' => 'Salad, Italian, Healthy',
            'prep_time' => 15,
            'instructions' => '1. Slice the tomatoes and mozzarella. 
                                2. Arrange them on a plate. 
                                3. Add basil leaves on top.
                                4. Drizzle with balsamic dressing.',
        ]);

        Recipe::create([
            'name' => 'Chocolate Lava Cake',
            'description' => 'A decadent molten chocolate cake with a rich, gooey center.',
            'price' => 850.00,
            'picture' => 'storage/images/chocolate-lava-cake.jpg',
            'ingredients' => json_encode(['Chocolate', 'Butter', 'Sugar', 'Eggs', 'Flour']),
            'category' => 'Non-Veg',
            'tags' => 'Dessert, Chocolate, Cake',
            'prep_time' => 15,
            'instructions' => '1. Melt the chocolate and butter together. 
                                2. Mix in sugar and eggs. 
                                3. Pour batter into ramekins. 
                                4. Bake until edges are firm, but center is soft.',
        ]);

        Recipe::create([
            'name' => 'Chicken Alfredo Pizza',
            'description' => 'A creamy chicken Alfredo sauce topped with mozzarella on a pizza crust.',
            'price' => 2000.00,
            'picture' => 'storage/images/chicken-alfredo-pizza.jpg',
            'ingredients' => json_encode(['Chicken', 'Alfredo Sauce', 'Mozzarella', 'Pizza Dough']),
            'category' => 'Non-Veg',
            'tags' => 'Pizza, Chicken, Creamy',
            'prep_time' => 15,
            'instructions' => '1. Preheat the oven to 400°F (200°C). 
                                2. Roll out pizza dough and spread Alfredo sauce. 
                                3. Add cooked chicken and mozzarella on top. 
                                4. Bake until crust is golden and cheese is melted.',
        ]);

        Recipe::create([
            'name' => 'Quinoa Salad with Chickpeas and Avocado',
            'description' => 'A nutritious salad made with quinoa, chickpeas, and avocado.',
            'price' => 150.00,
            'picture' => 'storage/images/quinoa-salad.jpg',
            'ingredients' => json_encode(['Quinoa', 'Chickpeas', 'Avocado', 'Lemon', 'Olive Oil']),
            'category' => 'Vegetarian',
            'tags' => 'Salad, Quinoa, Healthy',
            'prep_time' => 15,
            'instructions' => '1. Cook the quinoa according to package instructions. 
                                2. Combine chickpeas, diced avocado, and cooked quinoa. 
                                3. Drizzle with lemon juice and olive oil. 
                                4. Toss to combine.',
        ]);

        Recipe::create([
            'name' => 'Spaghetti Carbonara',
            'description' => 'A classic Italian pasta dish with eggs, cheese, pancetta, and pepper.',
            'price' => 1800.00,
            'picture' => 'storage/images/spaghetti-carbonara.jpg',
            'ingredients' => json_encode(['Spaghetti', 'Eggs', 'Cheese', 'Pancetta', 'Pepper']),
            'category' => 'Non-Veg',
            'tags' => 'Pasta, Italian, Cheese',
            'prep_time' => 15,
            'instructions' => '1. Cook spaghetti according to package directions. 
                                2. Fry pancetta until crispy. 
                                3. Mix eggs and cheese together. 
                                4. Toss pasta with pancetta and egg mixture. Add pepper to taste.',
        ]);

        Recipe::create([
            'name' => 'Grilled Veggie Burger',
            'description' => 'A plant-based burger made with grilled vegetables and served with lettuce and tomato.',
            'price' => 250.00,
            'picture' => 'storage/images/grilled-veggie-burger.jpg',
            'ingredients' => json_encode(['Vegetables', 'Burger Bun', 'Lettuce', 'Tomato', 'Mayonnaise']),
            'category' => 'Vegetarian',
            'tags' => 'Burger, Veggie, Healthy',
            'prep_time' => 15,
            'instructions' => '1. Grill the vegetables until tender. 
                                2. Toast the burger buns. 
                                3. Assemble the burger with lettuce, tomato, grilled vegetables, and mayonnaise. 
                                4. Serve immediately.',
        ]);

        Recipe::create([
            'name' => 'Beef Wellington',
            'description' => 'A classic English dish made with beef fillet coated with mushrooms and wrapped in puff pastry.',
            'price' => 4000.00,
            'picture' => 'storage/images/beef-wellington.jpg',
            'ingredients' => json_encode(['Beef', 'Mushrooms', 'Puff Pastry', 'Dijon Mustard', 'Egg Wash']),
            'category' => 'Non-Veg',
            'tags' => 'Beef, Pastry, Classic',
            'prep_time' => 15,
            'instructions' => '1. Sear the beef fillet and coat with Dijon mustard. 
                                2. Prepare a mushroom duxelles. 
                                3. Wrap the beef in the mushroom mixture and puff pastry. 
                                4. Bake until golden brown and serve.',
        ]);

        Recipe::create([
            'name' => 'Vegetable Stir Fry',
            'description' => 'A colorful mix of stir-fried vegetables in a savory sauce.',
            'price' => 180.00,
            'picture' => 'storage/images/vegetable-stir-fry.jpg',
            'ingredients' => json_encode(['Broccoli', 'Carrot', 'Bell Peppers', 'Soy Sauce', 'Garlic']),
            'category' => 'Vegetarian',
            'tags' => 'Stir Fry, Vegetables, Asian',
            'prep_time' => 15,
            'instructions' => '1. Stir-fry the vegetables in a hot pan. 
                                2. Add garlic and soy sauce. 
                                3. Continue to cook until vegetables are tender. 
                                4. Serve immediately.',
        ]);

        Recipe::create([
            'name' => 'Shrimp Scampi',
            'description' => 'Shrimp cooked in a garlic butter sauce with pasta.',
            'price' => 1200.00,
            'picture' => 'storage/images/shrimp-scampi.jpg',
            'ingredients' => json_encode(['Shrimp', 'Garlic', 'Butter', 'Pasta', 'Parsley']),
            'category' => 'Non-Veg',
            'tags' => 'Seafood, Pasta, Garlic',
            'prep_time' => 15,
            'instructions' => '1. Cook pasta according to package instructions. 
                                2. Sauté garlic and shrimp in butter. 
                                3. Toss cooked pasta with shrimp mixture and garnish with parsley. 
                                4. Serve immediately.',
        ]);

        Recipe::create([
            'name' => 'Mushroom Risotto',
            'description' => 'A creamy Italian rice dish made with mushrooms and Parmesan cheese.',
            'price' => 950.00,
            'picture' => 'storage/images/mushroom-risotto.jpg',
            'ingredients' => json_encode(['Rice', 'Mushrooms', 'Parmesan', 'Broth', 'Butter']),
            'category' => 'Vegetarian',
            'tags' => 'Italian, Rice, Mushrooms',
            'prep_time' => 15,
            'instructions' => '1. Sauté mushrooms in butter until soft. 
                                2. Add rice and stir to coat. 
                                3. Gradually add broth while stirring constantly. 
                                4. Once rice is tender, stir in Parmesan and serve.',
        ]);
    }
}
