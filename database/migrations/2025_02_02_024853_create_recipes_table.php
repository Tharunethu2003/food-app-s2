<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('recipes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 8, 2);
        $table->string('picture')->nullable(); // For storing the image file path
        $table->text('ingredients')->nullable(); // For storing ingredients
        $table->string('category');
        $table->text('tags')->nullable();
        
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('recipes');
}

};
