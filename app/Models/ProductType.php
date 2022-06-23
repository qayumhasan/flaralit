<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory, Uuids;

    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    protected $primaryKey = 'product_type_id';

    const STATUS_LIST = [
        self::STATUS_ACTIVE   => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_types','type_id', 'product_id');
    }
}
