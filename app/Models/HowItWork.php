<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowItWork extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'how_it_work_id';

    protected $guarded = ['how_it_work_id'];

    const SECTION_ONE       = 1;
    const SECTION_TWO       = 2;
    const SECTION_THREE     = 3;
    const SECTION_FOUR      = 4;
    const SECTION_FIVE      = 5;
    const SECTION_SIX       = 6;
    const SECTION_SEVEN     = 7;
    const SECTION_EIGHT     = 8;

    const SECTION_LIST = [
        self::SECTION_ONE       => 'Section One',
        self::SECTION_TWO       => 'Section Two',
        self::SECTION_THREE     => 'Section Three',
        self::SECTION_FOUR      => 'Section Four',
        self::SECTION_FIVE      => 'Section Five',
        self::SECTION_SIX       => 'Section Six',
        self::SECTION_SEVEN     => 'Section Seven',
        self::SECTION_EIGHT     => 'Section Eight',
    ];
}
