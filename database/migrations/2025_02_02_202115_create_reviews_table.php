<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Reviewer
        $table->foreignId('recipe_id')->constrained()->onDelete('cascade'); // Associated recipe
        $table->text('review'); // Review text
        $table->integer('rating'); // Rating (1-5)
        $table->timestamps();
    });
}

};
