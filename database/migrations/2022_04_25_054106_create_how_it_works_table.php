<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowItWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_it_works', function (Blueprint $table) {
            $table->uuid('how_it_work_id');
            $table->string('section_one_top_img')->nullable();
            $table->string('section_one_title')->nullable();
            $table->string('section_one_subtitle')->nullable();
            $table->string('section_one_image')->nullable();

            $table->string('section_two_title')->nullable();
            $table->string('section_two_details')->nullable();
            $table->string('section_two_items_one_title')->nullable();
            $table->text('section_two_items_one_description')->nullable();
            $table->string('section_two_items_one_image')->nullable();
            $table->string('section_two_items_two_title')->nullable();
            $table->text('section_two_items_two_description')->nullable();
            $table->string('section_two_items_two_image')->nullable();
            $table->string('section_two_items_three_title')->nullable();
            $table->text('section_two_items_three_description')->nullable();
            $table->string('section_two_items_three_image')->nullable();

            $table->string('section_three_title')->nullable();
            $table->string('section_three_image')->nullable();
            $table->string('section_three_description')->nullable();
            $table->json('section_three_content')->nullable();

            $table->string('section_four_title')->nullable();
            $table->json('section_four_content')->nullable();

            $table->string('section_five_title')->nullable();
            $table->string('section_five_image')->nullable();
            $table->string('section_five_description')->nullable();

            $table->string('section_six_title')->nullable();
            $table->json('section_six_content')->nullable();
            $table->string('section_six_feature_title1')->nullable();
            $table->string('section_six_feature_title2')->nullable();
            $table->string('section_six_feature_title3')->nullable();
            $table->text('section_six_feature_note')->nullable();

            $table->json('section_seven_content')->nullable();

            $table->string('section_eight_title')->nullable();
            $table->string('section_eight_subtitle')->nullable();

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
        Schema::dropIfExists('how_it_works');
    }
}
