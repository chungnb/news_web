<?php

namespace App\Http\Controllers;

use App\Jobs\SendApplicantEmail;
use App\Mail\ApplicantNotification;
use App\Models\Applicant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicantController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'resume' => 'required|file|mimes:pdf|max:2048',
            'position' => 'required|string|max:255',
            'term' => 'required',
        ]);
        $path = null;
        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes', 'public');

            // Get the absolute path of the uploaded file
            $absolutePath = storage_path('app/public/' . $path);
        }
        try {
            $req = Applicant::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'position' => $request->position,
                'resume' => $path,
                'term' => $request->term ? ACTIVE : NOT_ACTIVE, // validate
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            //code...
            Mail::to('dtgtechvn@gmail.com')->send(new ApplicantNotification($req, $absolutePath));
            // SendApplicantEmail::dispatch($req, $absolutePath);

            if ($req) {
                return redirect()->back()->with('success', 'Ứng tuyển thành công!');
            }

            // return abort(500);

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra');

        }
    }
}
