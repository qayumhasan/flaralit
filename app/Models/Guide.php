<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'guide_id';

    protected $guarded = ['guide_id'];

    const SECTION_ONE       = 1;
    const SECTION_TWO       = 2;
    const SECTION_THREE     = 3;
    const SECTION_FOUR      = 4;
    const SECTION_FIVE      = 5;
    const SECTION_SIX       = 6;
    const SECTION_SEVEN     = 7;
    const SECTION_EIGHT     = 8;
    const SECTION_NINE      = 9;
    const SECTION_TEN       = 10;
    const SECTION_ELEVEN    = 11;
    const SECTION_TWELVE    = 12;
    const SECTION_THIRTEEN  = 13;
    const SECTION_FOURTEEN  = 14;
    const SECTION_FIFTEEN   = 15;
    const SECTION_SIXTEEN   = 16;

    const SECTION_LIST = [
        self::SECTION_ONE       => 'Section One',
        self::SECTION_TWO       => 'Section Two',
        self::SECTION_THREE     => 'Section Three',
        self::SECTION_FOUR      => 'Section Four',
        self::SECTION_FIVE      => 'Section Five',
        self::SECTION_SIX       => 'Section Six',
        self::SECTION_SEVEN     => 'Section Seven',
        self::SECTION_EIGHT     => 'Section Eight',
        self::SECTION_NINE      => 'Section Nine',
        self::SECTION_TEN       => 'Section Ten',
        self::SECTION_ELEVEN    => 'Section Eleven',
        self::SECTION_TWELVE    => 'Section Twelve',
        self::SECTION_THIRTEEN  => 'Section Thirteen',
        self::SECTION_FOURTEEN  => 'Section Fourteen',
        self::SECTION_FIFTEEN   => 'Section Fifteen',
        self::SECTION_SIXTEEN   => 'Section Sixteen',
    ];
}
