<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = ['name', 'slug', 'is_active', 'seo_heading', 'seo_title', 'seo_description', 'seo_keywords'];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
