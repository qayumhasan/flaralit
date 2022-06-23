<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageGuidelineInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_guideline_instructions', function (Blueprint $table) {
            $table->uuid('instruction_id');
            $table->tinyInteger('instruction_type');
            $table->string('heading');
            $table->longText('description');
            $table->tinyInteger('image_layout_id')->nullable();
            $table->json('images')->nullable();
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
        Schema::dropIfExists('image_guideline_instructions');
    }
}
