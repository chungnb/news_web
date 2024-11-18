<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    
    function __construct()
    {
        //  $this->middleware('permission:list news | add news | edit news | delete news', ['only' => ['index','store']]);
         $this->middleware('permission:add media', ['only' => ['create','store']]);
         $this->middleware('permission:edit media', ['only' => ['edit','update']]);
         $this->middleware('permission:delete media', ['only' => ['destroy']]);
         $this->middleware('permission:list media', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $headers = ['Tập tin', 'Tác giả', 'Đã tải lên', 'Ngày'];

        $query = Media::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('file_name', 'like', "%{$search}%");
        }

        $media =  $query->paginate(DEFAULT_PAGE);
        return view('admin.media.index', compact('headers', 'media'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'upload' => 'required|file|mimes:jpeg,jpg,png,gif,webp,mp4,mov,avi,flv|max:51200', // 50MB max for videos
        ];

        // Custom validation messages
        $messages = [
            'upload.max' => 'The file size must not exceed 50MB.',
        ];

        // Validate the request
        $request->validate($rules, $messages);

        // Check if file is an image and validate its size separately
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

            // $time = time();
            // $fileNameToStore = $fileName . '_' . $time;

            $path = $file->storeAs('uploads', $fileName ,'public');
            
            $title = pathinfo($fileName, PATHINFO_FILENAME);
            $fileType = $file->getClientMimeType();
            $fileSize = $file->getSize();
            $url = $path;
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

            return redirect()->route('admin.media.index')->with('success', "Thêm ảnh thành công");

        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $media = Media::findOrFail($id);

        return view('admin.media.update', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $rules = [
            'upload' => 'required|file|mimes:jpeg,jpg,png,gif,webp,mp4,mov,avi,flv|max:51200', // 50MB max for videos
            'title' => 'string|max:255',
            'alt' => 'string|max:255',
            'description' => 'nullable|string',
        ];
    
        // Custom validation messages
        $messages = [
            'upload.max' => 'The file size must not exceed 50MB.',
        ];
    
        // Validate the request
        $request->validate($rules, $messages);
    
        // Check if file is an image and validate its size separately
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            if (in_array($file->getMimeType(), ['image/jpeg', 'image/png', 'image/gif', 'image/webp'])) {
                $imageRules = ['upload' => 'max:1024']; // 1MB max for images
                $imageMessages = ['upload.max' => 'The image size must not exceed 1MB.'];
                $request->validate($imageRules, $imageMessages);
            }
        }
    
        $media = Media::findOrFail($id);
        $currentFile = $media->url;
    
        // Handle file upload
        if ($request->hasFile('upload')) {
            if ($currentFile) {
                Storage::disk('public')->delete($currentFile);
            }
    
            $file = $request->file('upload');
            $originalFileName = $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $originalFileName, 'public');
    
            $media->url = $path;
            $media->file_name = $originalFileName;
            $media->file_type = $file->getClientMimeType();
            $media->file_size = round($file->getSize() / 1024, 2); // Kích thước file tính bằng KB
            $media->width = getimagesize($file)[0] ?? null; // Chiều rộng của hình ảnh, nếu có
            $media->height = getimagesize($file)[1] ?? null; // Chiều cao của hình ảnh, nếu có
        }
    
        // Update other fields
        $media->title = $request->title ?? pathinfo($originalFileName, PATHINFO_FILENAME);
        $media->alt = $request->alt ?? '';
        $media->description = $request->description ?? '';
    
        $media->save();
    
        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $media = Media::findOrFail($id);
        $currentFile = $media->url;

        if ($currentFile) {
            Storage::disk('public')->delete($currentFile);
        }

        $media->delete();

        return redirect()->route('admin.media.index')->with('success', 'Deleted successfully.');
    }
}
