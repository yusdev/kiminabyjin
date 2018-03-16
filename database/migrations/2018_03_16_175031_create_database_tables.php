<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categories', function (Blueprint $table) {
          $table->increments('id');
          $table->string('category');
          $table->string('slug')->unique();
          $table->rememberToken();
          $table->timestamps();
      });

      Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('slug')->unique();
          $table->string('description');
          $table->integer('price');
          $table->integer('saleprice');
          $table->integer('publish_time');
          $table->integer('id_category');
          $table->rememberToken();
          $table->timestamps();
      });

      Schema::create('products_images', function (Blueprint $table) {
          $table->increments('id');
          $table->string('id_product');
          $table->string('src');
          $table->rememberToken();
          $table->timestamps();
      });

      Schema::create('sizes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('sizes');
          $table->rememberToken();
          $table->timestamps();
      });

      Schema::create('colors', function (Blueprint $table) {
          $table->increments('id');
          $table->string('color');
          $table->rememberToken();
          $table->timestamps();
      });

      Schema::create('stocks', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_product');
          $table->integer('id_size');
          $table->integer('id_color');
          $table->integer('stock');
          $table->rememberToken();
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
        Schema::dropIfExists('products_images');
        Schema::dropIfExists('sizes');
        Schema::dropIfExists('colors');
        Schema::dropIfExists('stocks');
    }
}
