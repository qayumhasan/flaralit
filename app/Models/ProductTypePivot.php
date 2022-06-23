<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypePivot extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'product_type_pivot_id';

    protected $table = 'product_type_pivots';
}
