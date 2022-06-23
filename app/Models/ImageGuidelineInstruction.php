<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGuidelineInstruction extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'instruction_id';

    protected $fillable = [
        'instruction_id',
        'instruction_type',
        'heading',
        'description',
        'image_layout_id',
        'images',
    ];

    const INSTRUCTION_TYPE_DO = 1;
    const INSTRUCTION_TYPE_DONT = 2;

    const INSTRUCTION_TYPES = [
        self::INSTRUCTION_TYPE_DO => 'Do',
        self::INSTRUCTION_TYPE_DONT => 'Dont',
    ];
}
