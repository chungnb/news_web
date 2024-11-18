<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = ['title', 'content', 'slug', 'category_id', 'views', 'image', 'author_id', 'published_at', 'seo_heading', 'seo_title', 'seo_description', 'seo_keywords','primary_key','secondary_key','seo_score'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
