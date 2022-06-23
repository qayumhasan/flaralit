<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypePivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_type_pivots', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('product_id', 100);
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('type_id', 100);
            $table->foreign('type_id')->references('id')->on('product_types');
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
        Schema::dropIfExists('product_type_pivots');
    }
}
