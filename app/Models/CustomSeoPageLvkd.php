<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomSeoPageLvkd extends Model
{
    use HasFactory;

    protected $table = 'custom_seo_page_lvkd';

    protected $fillable = [
        'xnk_seo_heading',
        'xnk_seo_title',
        'xnk_seo_description',
        'xnk_seo_keywords',
        'ecommerce_seo_heading',
        'ecommerce_seo_title',
        'ecommerce_seo_description',
        'ecommerce_seo_keywords',
        'kd_seo_heading',
        'kd_seo_title',
        'kd_seo_description',
        'kd_seo_keywords',
        'author_id',
    ];
}
