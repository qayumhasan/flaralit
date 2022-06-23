<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('seller_id', 100);
            $table->foreign('seller_id')->references('id')->on('users');
            $table->string('unique_id')->unique();
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('website')->nullable(); 
            $table->string('support_email')->nullable();
            $table->string('support_phone')->nullable();
            $table->string('cover_image')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('is_free')->nullable();
            $table->float('price', 16, 2)->default(0);
            $table->float('discount_price', 16, 2)->default(0);
            $table->tinyInteger('status')->default(3)->comment('0 = Cancelled, 1 = Accepted, 2 = Pending, 3=Draft');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
