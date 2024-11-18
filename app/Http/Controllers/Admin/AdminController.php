<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Media;
use App\Models\News;
use App\Models\Visit;
use App\Models\Config;
use App\Models\VisitAdminLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index () {
        
        $totalVisit = Visit::count();

        $totalNews = News::count();

        $totalCategory = Category::count();

        return view('admin.dashboard', compact('totalNews', 'totalVisit', 'totalCategory'));
    }

    public function getContact (Request $request) {
        
        $headers = ['ID', 'Họ và Tên', 'Email', 'Số điện thoại', 'Nội dung', 'Ngày gửi'];

        $query = DB::table('contact');

        if ($request->has('search')) {

            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");

        }

        $contact =  $query->paginate(DEFAULT_PAGE);

        return view('admin.contact', compact('contact', 'headers'));
    }

    public function uploadCKeditor (Request $request) {

        $rules = [
            'upload' => 'required|file|mimes:jpeg,jpg,png,gif,webp,mp4,mov,avi,flv|max:51200', // 50MB max for videos
        ];

        $messages = [
            'upload.max' => 'The file size must not exceed 50MB.',
        ];

        $request->validate($rules, $messages);

        if (in_array($request->file('upload')->getMimeType(), ['image/jpeg', 'image/png', 'image/gif', 'image/webp'])) {
            $imageRules = [
                'upload' => 'max:1024', // 1MB max for images
            ];

            $imageMessages = [
                'upload.max' => 'The image size must not exceed 1MB.',
            ];

            $request->validate($imageRules, $imageMessages);
        }

        if ($request->hasFile('upload')) {
            $file = $request->file('upload');

            $fileName = $file->getClientOriginalName();

            $path = $file->storeAs('uploads', $fileName , 'public');
            
            $title = pathinfo($fileName, PATHINFO_FILENAME);
            $fileType = $file->getClientMimeType();
            $fileSize = $file->getSize();
            $url =  $path;
            $image = getimagesize($file);
            $width = $image[0];
            $height = $image[1];

            // Lưu thông tin vào database
            $media = new Media();
            $media->title = $title;
            $media->file_name = $fileName;
            $media->alt = $request->input('alt', '');
            $media->url = $url;
            $media->width = $width;
            $media->height = $height;
            $media->file_size = formatFileSize($fileSize);
            $media->user_id = auth()->user()->id; // Hoặc lấy user_id từ request nếu có
            $media->file_type = $fileType;
            $media->save();
            return response()->json([
                'url' => Storage::url($path)
            ]);
        }

        return response()->json(['error' => 'File not uploaded'], 400);
    }

    public function viewLog (Request $request) {
        $headers = ['ID', 'User Name', 'URL' ,'Action Taken', 'Date Taken'];
        $query = VisitAdminLogs::query();


        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('user_name', 'like', "%$search%");
        }

        $logs = $query->orderBy('created_at', 'desc')->paginate(DEFAULT_PAGE);


        return view('admin.logs', compact('headers', 'logs'));
    }

    public function importScript(Request $request){
        $script = Config::first();
        return view('admin.config.index', compact('script'));
    }

    public function store(Request $request)
    {
        $update = Config::where('id',1)->update(['header' => $request->header ?? '', 'body' => $request->body ?? '', 'footer' => $request->footer  ?? '']);
        return redirect()->route('admin.script.index')->with('success', 'script created successfully.');
    }

}
