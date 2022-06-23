<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->uuid('guide_id');

            $table->text('section_one_top_img')->nullable();
            $table->text('section_one_title')->nullable();
            $table->text('section_one_subtitle')->nullable();
            $table->text('section_one_image')->nullable();

            $table->text('section_two_title')->nullable();
            $table->text('section_two_details')->nullable();
            $table->text('section_two_items_one_title')->nullable();
            $table->text('section_two_items_one_description')->nullable();
            $table->text('section_two_items_one_image')->nullable();
            $table->text('section_two_items_two_title')->nullable();
            $table->text('section_two_items_two_description')->nullable();
            $table->text('section_two_items_two_image')->nullable();
            $table->text('section_two_items_three_title')->nullable();
            $table->text('section_two_items_three_description')->nullable();
            $table->text('section_two_items_three_image')->nullable();

            $table->text('section_three_pre_title')->nullable();
            $table->text('section_three_title')->nullable();
            $table->text('section_three_image')->nullable();
            $table->text('section_three_description')->nullable();
            $table->string('section_three_video_id')->nullable();

            $table->text('section_four_pre_title')->nullable();
            $table->text('section_four_title')->nullable();
            $table->json('section_four_content')->nullable();

            $table->text('section_five_pre_title')->nullable();
            $table->text('section_five_title')->nullable();
            $table->text('section_five_image')->nullable();
            $table->text('section_five_description')->nullable();
            $table->text('section_five_youtube_id')->nullable();

            $table->text('section_six_pre_title')->nullable();
            $table->text('section_six_title')->nullable();
            $table->text('section_six_items_one_title')->nullable();
            $table->text('section_six_items_one_description')->nullable();
            $table->text('section_six_items_one_image')->nullable();
            $table->text('section_six_items_two_title')->nullable();
            $table->text('section_six_items_two_description')->nullable();
            $table->text('section_six_items_two_image')->nullable();
            $table->text('section_six_items_three_title')->nullable();
            $table->text('section_six_items_three_description')->nullable();
            $table->text('section_six_items_three_image')->nullable();

            $table->text('section_seven_name')->nullable();
            $table->text('section_seven_designation')->nullable();
            $table->text('section_seven_image')->nullable();
            $table->text('section_seven_description')->nullable();

            $table->text('section_eight_pre_title')->nullable();
            $table->text('section_eight_title')->nullable();
            $table->text('section_eight_short')->nullable();
            $table->text('section_eight_items_one_title')->nullable();
            $table->text('section_eight_items_one_description')->nullable();
            $table->text('section_eight_items_one_image')->nullable();
            $table->text('section_eight_items_two_title')->nullable();
            $table->text('section_eight_items_two_description')->nullable();
            $table->text('section_eight_items_two_image')->nullable();

            $table->text('section_nine_items_img')->nullable();
            // $table->text('section_nine_items_one_short')->nullable();
            // $table->text('section_nine_items_one_subitem_one_text')->nullable();
            // $table->boolean('section_nine_items_one_subitem_one_check')->default(0);;
            // $table->text('section_nine_items_one_subitem_two_text')->nullable();
            // $table->boolean('section_nine_items_one_subitem_two_check')->default(0);;
            // $table->text('section_nine_items_one_subitem_three_text')->nullable();
            // $table->boolean('section_nine_items_one_subitem_three_check')->default(0);;
            // $table->text('section_nine_items_one_subitem_four_details')->nullable();

            // $table->text('section_nine_items_two_title')->nullable();
            // $table->text('section_nine_items_two_short')->nullable();
            // $table->text('section_nine_items_two_subitem_one_text')->nullable();
            // $table->boolean('section_nine_items_two_subitem_one_check')->default(0);
            // $table->text('section_nine_items_two_subitem_two_text')->nullable();
            // $table->boolean('section_nine_items_two_subitem_two_check')->default(0);
            // $table->text('section_nine_items_two_subitem_three_text')->nullable();
            // $table->boolean('section_nine_items_two_subitem_three_check')->default(0);
            // $table->text('section_nine_items_two_subitem_four_details')->nullable();

            $table->text('section_ten_title')->nullable();
            $table->text('section_ten_description')->nullable();
            $table->text('section_ten_image')->nullable();
            $table->text('section_ten_youtube_id')->nullable();



            $table->text('section_eleven_title')->nullable();
            $table->text('section_eleven_pre_title')->nullable();
            $table->text('section_eleven_description')->nullable();

            $table->text('section_eleven_items_one_title')->nullable();
            $table->text('section_eleven_items_one_description')->nullable();
            $table->text('section_eleven_items_one_image')->nullable();
            $table->text('section_eleven_items_two_title')->nullable();
            $table->text('section_eleven_items_two_description')->nullable();
            $table->text('section_eleven_items_two_image')->nullable();
            $table->text('section_eleven_items_three_title')->nullable();
            $table->text('section_eleven_items_three_description')->nullable();
            $table->text('section_eleven_items_three_image')->nullable();
            $table->text('section_eleven_items_four_title')->nullable();
            $table->text('section_eleven_items_four_description')->nullable();
            $table->text('section_eleven_items_four_image')->nullable();


            $table->text('section_twelve_name')->nullable();
            $table->text('section_twelve_designation')->nullable();
            $table->text('section_twelve_image')->nullable();
            $table->text('section_twelve_description')->nullable();

            $table->text('section_thirteen_pre_title')->nullable();
            $table->text('section_thirteen_title')->nullable();
            $table->text('section_thirteen_description')->nullable();
            $table->text('section_thirteen_image')->nullable();

            $table->text('section_fourteen_title')->nullable();
            $table->text('section_fourteen_description')->nullable();
            $table->text('section_fourteen_items_one_title')->nullable();
            $table->text('section_fourteen_items_one_description')->nullable();
            $table->text('section_fourteen_items_one_image')->nullable();
            $table->text('section_fourteen_items_two_title')->nullable();
            $table->text('section_fourteen_items_two_description')->nullable();
            $table->text('section_fourteen_items_two_image')->nullable();
            $table->text('section_fourteen_items_three_title')->nullable();
            $table->text('section_fourteen_items_three_description')->nullable();
            $table->text('section_fourteen_items_three_image')->nullable();

            $table->text('section_fifteen_name')->nullable();
            $table->text('section_fifteen_designation')->nullable();
            $table->text('section_fifteen_image')->nullable();
            $table->text('section_fifteen_description')->nullable();


            $table->string('section_sixteen_title')->nullable();
            $table->string('section_sixteen_subtitle')->nullable();

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
        Schema::dropIfExists('guides');
    }
}
