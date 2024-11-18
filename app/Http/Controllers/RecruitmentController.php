<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index() {
        // dd(123);

        $recruitment = Recruitment::where('is_active', ACTIVE)->orderBy('created_at', 'desc')->paginate(9);
        // dd($recruitment);
        return view('recruitment', compact('recruitment'));
    }

    public function detail($slug) {

        $job = Recruitment::where('slug', $slug)->first();

        return view('detailRecruitment', compact('job'));
    }

}
