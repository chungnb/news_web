<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:list news | add news | edit news | delete news', ['only' => ['index','store']]);
         $this->middleware('permission:add slides', ['only' => ['create','store']]);
         $this->middleware('permission:edit slides', ['only' => ['edit','update']]);
         $this->middleware('permission:delete slides', ['only' => ['destroy']]);
         $this->middleware('permission:list slides', ['only' => ['index']]);
    }
    public function index()
    {
        $headers = ['ID', 'Banner', 'content', 'Trạng thái'];
        $slides = Slide::orderby('updated_at', 'desc')->paginate(DEFAULT_PAGE);

        return view('admin.slides.index', compact('slides', 'headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['nullable','string', 'max:255'],
            'content' => ['nullable','string', 'max:255'],
            'image' => 'required|image|max:5120|mimes:jpeg,jpg,png,gif,',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/slides', 'public');
        }
        
        $slides = Slide::create([
            'content' => $request->content,
            'title' => $request->title,
            'image' => $imagePath,
            'is_active' => $request->is_active ? 1 : 0
        ]);

        if ($slides) {
            return redirect()->route('admin.slides.edit', $slides->id)->with('success', 'Tạo video thành công');
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
        $slides = Slide::findOrFail($id);

        return view('admin.slides.edit', compact('slides'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string', 'max:255'],
            'image' => 'nullable|image|max:5120|mimes:jpeg,jpg,png,gif,',
        ]);

        $slides = Slide::findOrFail($id);

        $currentFile = $slides->image;

        if ($request->hasFile('image')) {

            if ($currentFile) {
                Storage::disk('public')->delete($currentFile);
            }
            // put image in the public storage
            $filePath = $request->file('image')->store('images/slides/', 'public');

            $slides->image = $filePath;
        } 

        $slides->content = $request->content;
        $slides->title = $request->title;
        $slides->is_active =  $request->is_active ? 1 : 0;

        $slides->save();
        return redirect()->back()->with('success', 'Cập nhật video thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slides = Slide::findOrFail($id);
        $currentFile = $slides->image;

        if ($currentFile) {
            Storage::disk('public')->delete($currentFile);
        }

        $slides->delete();
        
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
