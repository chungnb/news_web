<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:list news | add news | edit news | delete news', ['only' => ['index','store']]);
         $this->middleware('permission:add videos', ['only' => ['create','store']]);
         $this->middleware('permission:edit videos', ['only' => ['edit','update']]);
         $this->middleware('permission:delete videos', ['only' => ['destroy']]);
         $this->middleware('permission:list videos', ['only' => ['index']]);
    }
    public function index(Request $request)
    {
        $headers = ['ID', 'Tiêu đề', 'Url', 'Ngày đăng'];

        $query = Video::query();

        if ($request->has('search')) {
            $search = $request->input('search');
 
            $query->where('title', 'like' ,"%{$search}%");
 
         }

        $videos = $query->orderby('updated_at', 'desc')->paginate(DEFAULT_PAGE);

        return view('admin.videos.index', compact('videos', 'headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 'title', 'description', 'location', 'num_of_recruitment', 'salary', 'position'
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
        ]);

        $videos = Video::create($request->all());
        if ($videos) {
            return redirect()->route('admin.videos.edit')->with('success', 'Tạo video thành công');
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
        $videos = Video::findOrFail($id);

        return view('admin.videos.edit', compact('videos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
        ]);

        $videos = Video::findOrFail($id);

        $videos->update([
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description ?? null,
            'published_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Cập nhật video thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recruitment = Video::findOrFail($id);

        $recruitment->delete();

        return redirect()->back()->with('success', 'Xóa tin thành công');
    }
}
