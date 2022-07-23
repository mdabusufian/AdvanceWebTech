<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id('sellerid')->autoIncrement();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('email');
            $table->string('status')->nullable();
            $table->string('gender');
            $table->binary('image',300)->nullable();
            $table->string('number');
            $table->timestamps();
            
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
};
