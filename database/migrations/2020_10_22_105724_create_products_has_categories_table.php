<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsHasCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_has_categories', function (Blueprint $table) {
	    $table->unsignedBigInteger('product_id');
	    $table->unsignedBigInteger('category_id');

	    $table->foreign('product_id')->references('id')->on('products');
	    $table->foreign('category_id')->references('id')->on('categories');

	    $table->primary(['product_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_has_categories');
    }
}
