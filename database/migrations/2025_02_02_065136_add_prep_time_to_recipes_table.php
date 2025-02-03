<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('recipes', function (Blueprint $table) {
        $table->integer('prep_time')->nullable()->after('tags');
    });
}

public function down()
{
    Schema::table('recipes', function (Blueprint $table) {
        $table->dropColumn('prep_time');
    });
}

};
