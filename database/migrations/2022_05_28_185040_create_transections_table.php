<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transections', function (Blueprint $table) {
            $table->id();
            $table->text('token')->nullable();
            $table->text('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('payment_type')->nullable();
            $table->float('amount', 16, 2)->default(0);
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
        Schema::dropIfExists('transections');
    }
}
