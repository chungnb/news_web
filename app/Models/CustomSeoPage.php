<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomSeoPage extends Model
{
    use HasFactory;

    protected $table = 'custom_seo_page';

    protected $fillable = [
        'home_seo_heading',
        'home_seo_title',
        'home_seo_description',
        'home_seo_keywords',
        'about_seo_heading',
        'about_seo_title',
        'about_seo_description',
        'about_seo_keywords',
        'video_seo_heading',
        'video_seo_title',
        'video_seo_description',
        'video_seo_keywords',
        'tuyen_dung_seo_heading',
        'tuyen_dung_seo_title',
        'tuyen_dung_seo_description',
        'tuyen_dung_seo_keywords',
        'author_id',
    ];
}
