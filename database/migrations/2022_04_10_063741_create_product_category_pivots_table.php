<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryPivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category_pivots', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('product_id', 100);
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('category_id', 100);
            $table->foreign('category_id')->references('product_category_id')->on('product_categories');
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
        Schema::dropIfExists('product_category_pivots');
    }
}
