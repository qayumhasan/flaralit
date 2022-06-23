<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_category_pivot', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('blog_id', 100);
            $table->foreign('blog_id')->references('id')->on('blogs');
            $table->string('category_id', 100);
            $table->foreign('category_id')->references('id')->on('blog_categories');
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
        Schema::dropIfExists('blog_category_pivot');
    }
}
