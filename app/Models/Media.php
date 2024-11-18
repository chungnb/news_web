<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = "media";

    protected $fillable = ['title', 'file_name', 'alt', 'url', 'width', 'height', 'file_size', 'user_id', 'post_id', 'description', 'file_type'];
}
