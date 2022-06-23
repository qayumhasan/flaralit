<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlusStackSaving extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'plus_stack_saving_id';

}
