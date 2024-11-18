<?php

namespace App\Http\Controllers;

use App\Mail\ApplicantNotification;
use App\Models\News;
use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
        $trending = News::limit(8)->get();
        $slides = Slide::where('is_active', ACTIVE)->get();
        return view('home', compact('trending', 'slides'));
    }

    public function storeContact (Request $request) {

        try {
            DB::table('contact')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'messages' => $request->messages,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            
            // Sess()->flash('success', 'Thành công!');
            // Mail::to('miralisondav@gmail.com')->send(new ApplicantNotification());
            return redirect()->back()->with('success', 'Gửi liên hệ thành công'); 
        } catch (\Throwable $th) {
            // Lỗi hệ thống
        }
       
    }
}
