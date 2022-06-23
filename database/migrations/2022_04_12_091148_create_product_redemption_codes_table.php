<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductRedemptionCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_redemption_codes', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('product_id', 100);
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('code', 200);
            $table->boolean('use_status')->default(false);
            $table->integer('customer_id')->nullable();
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
        Schema::dropIfExists('product_redemption_codes');
    }
}
