<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('order_id');
            $table->string('order_unique_id');
            $table->string('product_id', 100);
            $table->string('product_name');
            $table->string('quantity');
            $table->float('price', 16, 2)->default(0);
            $table->text('photo');
            $table->boolean('is_free')->default(0);
            $table->string('support_email')->nullable();
            $table->string('term_type')->nullable();
            $table->string('redemption_type')->nullable();
            $table->text('redemption_link')->nullable();
            $table->text('redemption_instruction')->nullable();
            $table->text('downloadable_file')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
