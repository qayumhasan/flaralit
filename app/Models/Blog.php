<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, Uuids;

    const STATUS_ACTIVE   = 1;
    const STATUS_INACTIVE = 0;

    const STATUS_LIST = [
        self::STATUS_ACTIVE   => 'Active',
        self::STATUS_INACTIVE => 'Inactive',
    ];

    protected $primaryKey = 'blog_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_category_pivot', 'blog_id', 'category_id');
    }

    public function contents()
    {
        return $this->hasMany(BlogContent::class, 'blog_id');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($blog) {
            $blog->contents()->delete();
        });
    }
}
