<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageGuidelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_guidelines', function (Blueprint $table) {
            $table->uuid('image_guideline_id')->primary();
            $table->tinyInteger('section_id')->unique();
            $table->string('header_image')->nullable();
            $table->string('main_header')->nullable();
            $table->string('title')->nullable();
            $table->string('short_description')->nullable();
            $table->string('section_image')->nullable();
            $table->string('section_note')->nullable();
            $table->json('content')->nullable();
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
        Schema::dropIfExists('image_guidelines');
    }
}
