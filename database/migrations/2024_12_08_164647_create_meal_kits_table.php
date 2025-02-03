<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // In the migration for meal_kits table
public function up()
{
    Schema::create('meal_kits', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 8, 2);
        $table->string('picture')->nullable(); // To store image file path
        $table->text('ingredients')->nullable(); // To store ingredients
        $table->string('category'); // Add category column
        $table->text('tags')->nullable(); // Add tags column (text to store comma-separated tags)
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_kits');
    }
};
