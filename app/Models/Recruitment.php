<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $table = 'recruitment';

    protected $fillable = ['title', 'description', 'location', 'num_of_recruitment', 'salary', 'position', 'working_time', 'slug', 'end_time', 'is_active', 'contact_address', 'seo_heading', 'seo_title', 'seo_description', 'seo_keywords'];
}
