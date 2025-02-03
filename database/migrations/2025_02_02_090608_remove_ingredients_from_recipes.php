<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn('ingredients');
        });
    }

    public function down()
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->text('ingredients')->nullable();  // Revert to original column type if rollback happens
        });
    }
};
