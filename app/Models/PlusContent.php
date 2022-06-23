<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlusContent extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'plus_content_id';

    const LAYOUT_ONE_IN_ONE   = 1;
    const LAYOUT_THREE_IN_ONE = 2;

    const LAYOUT_LIST = [
        self::LAYOUT_ONE_IN_ONE   => 'One In One',
        self::LAYOUT_THREE_IN_ONE => 'Three In One',
    ];
}
