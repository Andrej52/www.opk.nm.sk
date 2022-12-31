<?php

namespace Database\Seeders;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('thumbnail');
            $table->timestamp('path');
            $table->string('user');
            $table->timestamps();
        });  
    }
}
