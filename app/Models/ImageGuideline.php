<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGuideline extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'image_guideline_id';

    protected $fillable = [
        'section_id',
        'header_img',
        'main_header',
        'title',
        'short_description',
        'section_img_1',
        'section_img_2',
        'section_img_3',
        'section_img_4',
        'section_note',
        'content',
    ];

    const SECTION_BANNER        = 1;
    const SECTION_REQUIREMENT   = 2;
    const SECTION_ADVERTISEMENT = 3;
    const SECTION_INSTRUCTION   = 4;

    const SECTION_LIST = [
        self::SECTION_BANNER        => 'Banner Section',
        self::SECTION_REQUIREMENT   => 'Requirement Section',
        self::SECTION_ADVERTISEMENT => 'Advertisement Section',
        self::SECTION_INSTRUCTION   => 'Instruction Section',
    ];

    const IMAGE_LAYOUT_ONE_IN_A_ROW = 1;
    const IMAGE_LAYOUT_TWO_IN_A_ROW = 2;

    const IMAGE_LAYOUT_TYPES = [
        self::IMAGE_LAYOUT_ONE_IN_A_ROW => 'One in a row',
        self::IMAGE_LAYOUT_TWO_IN_A_ROW => 'Two in a row',
    ];
}
