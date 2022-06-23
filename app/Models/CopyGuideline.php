<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyGuideline extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'copy_guideline_id';

    protected $fillable = [
        'section_id',
        'header_img',
        'title',
        'short_description',
        'section_img_1',
        'section_img_2',
        'section_img_3',
        'section_img_4',
        'section_note',
        'content',
    ];

    const SECTION_BANNER      = 1;
    const SECTION_GET_STARTED = 2;
    const SECTION_BASIC       = 3;
    const SECTION_CONTENT     = 4;
    const SECTION_EXAMPLE     = 5;

    const SECTION_LIST = [
        self::SECTION_BANNER      => 'Banner Section',
        self::SECTION_GET_STARTED => 'Get Started Section',
        self::SECTION_BASIC       => 'Basic Section',
        self::SECTION_CONTENT     => 'Content Section',
        self::SECTION_EXAMPLE     => 'Example Section',
    ];
}
