<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $primaryKey = 'blog_categorie_id';

    protected $guarded = [];
    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_category_pivot', 'category_id', 'blog_id' );
    }
}
