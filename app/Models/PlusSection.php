<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlusSection extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'plus_section_id';

    const CONTENT_TYPE_BLOG    = 1;
    const CONTENT_TYPE_PRODUCT = 2;

    const CONTENT_TYPE_LIST = [
        self::CONTENT_TYPE_BLOG    => 'Blog',
        self::CONTENT_TYPE_PRODUCT => 'Product',
    ];

    const CONTENT_MODEL_LIST = [
        self::CONTENT_TYPE_BLOG    => 'Blog',
        self::CONTENT_TYPE_PRODUCT => 'Product',
    ];

    const SECTION_BANNER         = 1;
    const SECTION_JOIN_COMMUNITY = 2;
    const SECTION_FAVOURITES     = 3;
    const SECTION_STACK_SAVING   = 4;

    const SECTION_LIST = [
        self::SECTION_BANNER         => 'Banner Section',
        self::SECTION_JOIN_COMMUNITY => 'Join Community Section',
        self::SECTION_FAVOURITES     => 'Favourites Section',
        self::SECTION_STACK_SAVING     => 'Stack Saving Section',
    ];
}
