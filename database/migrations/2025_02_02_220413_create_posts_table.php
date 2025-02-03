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
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to users table
        $table->text('content'); // Post content (text and emojis)
        $table->string('image')->nullable(); // Image URL (nullable)
        $table->timestamps();
    });
}

    
};
