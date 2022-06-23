<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'product_image_id';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
