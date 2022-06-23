<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlusSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plus_sections', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('section_id');
            $table->string('heading')->nullable();
            $table->string('title')->nullable();
            $table->string('short_description')->nullable();
            $table->string('content_type')->nullable();
            $table->string('content_id')->nullable();
            $table->integer('media_type')->nullable();
            $table->string('media_link')->nullable();
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
        Schema::dropIfExists('plus_sections');
    }
}
