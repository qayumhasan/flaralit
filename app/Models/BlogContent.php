<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    use HasFactory, Uuids;
    protected $primaryKey = 'blog_content_id';
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
