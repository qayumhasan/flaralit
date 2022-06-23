<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use phpDocumentor\Reflection\ProductTypes\Parent_;

class Product extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $primaryKey = 'product_id';

    const TERM_LIFETIME = 1;
    const TERM_ANNUAL   = 2;

    const TERMS = [
        self::TERM_LIFETIME => 'Lifetime deal',
        self::TERM_ANNUAL   => 'Annual deal',
    ];

    const REDEMPTION_TYPE_CODE     = 1;
    const REDEMPTION_TYPE_DOWNLOAD = 2;

    const REDEMPTION_TYPES = [
        self::REDEMPTION_TYPE_CODE     => 'Code',
        self::REDEMPTION_TYPE_DOWNLOAD => 'Download',
    ];

    const STATUS_REJECTED = 0;
    const STATUS_ACCEPTED = 1;
    const STATUS_PENDING  = 2;
    const STATUS_DRAFT    = 3;

    const STATUS_LIST = [
        self::STATUS_REJECTED => 'Rejected',
        self::STATUS_ACCEPTED => 'Accepted',
        self::STATUS_PENDING  => 'Pending',
        self::STATUS_DRAFT    => 'Draft',
    ];

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_category_pivots', 'product_id', 'category_id');
    }

    public function types()
    {
        return $this->belongsToMany(ProductType::class, 'product_type_pivots', 'product_id', 'type_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'product_id');
    }

    public function detail()
    {
        return $this->hasOne(ProductDetail::class, 'product_id');
    }

    public function meta()
    {
        return $this->hasOne(ProductMeta::class, 'product_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function redemption_codes()
    {
        return $this->hasMany(ProductRedemptionCode::class, 'product_id');
    }

    public function user_wishlist()
    {
        return $this->belongsToMany(User::class, 'wishlists', 'product_id', 'user_id');
    }
}
