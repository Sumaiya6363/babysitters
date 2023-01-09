<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'bn_title',
        'category_id',
        'image',
        'description',
        'meta_title',
        'meta_description',
        'slug',
        'meta_tags',
        'status',
    ];

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class,'category_id');
    }
}
