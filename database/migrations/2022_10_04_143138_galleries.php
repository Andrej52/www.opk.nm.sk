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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('thumbnail');
            $table->string('path');
            $table->string('user');
            $table->timestamps();
        }); 
        
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('gallery_id');
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
        //
    }
};
