<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory, Uuids;

    protected $primaryKey = 'permission_id';

    const USER_MODULE           = 1;
    const QUESTIONS_MODULE      = 2;
    const REVIEWS_MODULE        = 3;
    const PRODUCT_MODULE        = 4;
    const DASHBOARD_MODULE      = 5;
    const ROLE_MODULE           = 6;
    const NOTIFICATION_MODULE   = 7;
    const BLOG_MODULE           = 8;
    const SETUP_MODULE          = 9;
    const PLUS_MODULE           = 10;
    const SELLER_PRODUCT_MODULE = 11;
    const GUIDELINE_MODULE      = 12;

    const PERMISSION_LIST = [
        self::USER_MODULE           => 'User Module',
        self::QUESTIONS_MODULE      => 'Question Module',
        self::REVIEWS_MODULE        => 'Review Module',
        self::PRODUCT_MODULE        => 'Product Module',
        self::DASHBOARD_MODULE      => 'Dashboard Module',
        self::ROLE_MODULE           => 'Role Module',
        self::NOTIFICATION_MODULE   => 'Notification Module',
        self::BLOG_MODULE           => 'Blog Module',
        self::SETUP_MODULE          => 'Setup Module',
        self::PLUS_MODULE           => 'Plus Module',
        self::SELLER_PRODUCT_MODULE => 'Seller Product Module',
        self::GUIDELINE_MODULE      => 'Guideline Module',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_roles', 'permission_id', 'role_id');
    }
}
