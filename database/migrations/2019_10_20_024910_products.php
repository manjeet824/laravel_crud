<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('ProdcutName', 100);
            $table->string('slug', 100);
            $table->integer('price');
            $table->integer('stock');
            $table->integer('skuid');
            $table->text('expert');
            $table->longText('description');
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
        Schema::drop('products');
    }
}
