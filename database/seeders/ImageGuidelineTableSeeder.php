<?php

namespace Database\Seeders;

use App\Models\ImageGuideline;
use Illuminate\Database\Seeder;

class ImageGuidelineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (ImageGuideline::SECTION_LIST as $key => $section_id) {
            if ($key != ImageGuideline::SECTION_INSTRUCTION) {
                $image_guideline             = new ImageGuideline();
                $image_guideline->section_id = $key;
                $image_guideline->save();
            }
        }
    }
}
