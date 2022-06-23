<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategoryPivot extends Model
{
    use HasFactory, Uuids;

    protected $table = 'blog_category_pivot';
    protected $primaryKey = 'blog_category_pivot_id';
}
