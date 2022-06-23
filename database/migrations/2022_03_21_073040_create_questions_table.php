<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('user_id', 100);
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('product_id', 100);
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('parent_id')->nullable();
            $table->longText('question');
            $table->boolean('is_read')->default(false);
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
        Schema::dropIfExists('questions');
    }
}
