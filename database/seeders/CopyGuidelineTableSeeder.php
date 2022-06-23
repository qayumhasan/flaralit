<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CopyGuideline;

class CopyGuidelineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        foreach (CopyGuideline::SECTION_LIST as $key => $section_id) {
            $copy_guideline             = new CopyGuideline();
            $copy_guideline->section_id = $key;
            $copy_guideline->save();
        }
    }
}
