<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'applicants';
    
    protected $fillable = ['full_name', 'phone', 'email', 'position', 'term', 'created_at', 'resume'];
}
