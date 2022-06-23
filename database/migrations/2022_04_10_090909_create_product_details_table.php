<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('product_id', 100);
            $table->foreign('product_id')->references('id')->on('products');
            $table->json('key_features')->nullable();
            $table->tinyInteger('term_type')->nullable();
            $table->tinyInteger('redemption_type')->nullable();
            $table->string('redemption_link')->nullable();
            $table->string('csv')->nullable();
            $table->json('redemption_instruction')->nullable();
            $table->timestamps();
        });

//        \Illuminate\Support\Facades\DB::table('product_details')->insert([
//            'id'                     => 1,
//            'product_id'             => 1,
//            'key_features'           => '"Demo key features of the product"',
//            'term_type'              => 1,
//            'redemption_type'        => 1,
//            'redemption_link'        => 'www.redemption.link',
//            'csv'                    => 'code.zip',
//            'redemption_instruction' => '"demo product redemption"',
//        ]);
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
