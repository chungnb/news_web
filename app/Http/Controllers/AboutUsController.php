<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class AboutUsController extends Controller
{
    public function index() {
        $slides = Slide::where('is_active', ACTIVE)->get();
        return view('aboutUs', compact('slides'));
    }
}
