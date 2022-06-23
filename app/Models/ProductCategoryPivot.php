<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryPivot extends Model
{
    use HasFactory, Uuids;

    protected $table = 'product_category_pivots';

    protected $primaryKey = 'product_category_pivot_id';

}
