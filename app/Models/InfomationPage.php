<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfomationPage extends Model
{
    use HasFactory;

    protected $table = "infomation_page";

    protected $fillable = ['title', 'slug', 'content', 'is_active'];
}
