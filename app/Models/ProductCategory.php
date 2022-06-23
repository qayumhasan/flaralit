<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'product_category_id';

    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    const STATUS_LIST = [
        self::STATUS_ACTIVE   => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category_pivots','category_id', 'product_id');
    }
}
