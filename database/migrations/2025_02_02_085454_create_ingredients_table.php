<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_ingredients_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id(); // auto-incrementing primary key
            $table->string('name'); // ingredient name (e.g. "Tomato", "Onion")
            $table->text('description')->nullable(); // optional description for the ingredient
            $table->decimal('quantity', 8, 2)->nullable(); // quantity of the ingredient (e.g. 2.5, 1.0)
            $table->foreignId('recipe_id')->constrained()->onDelete('cascade'); // relationship to the recipe (foreign key)
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
