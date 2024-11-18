<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:list news | add news | edit news | delete news', ['only' => ['index','store']]);
         $this->middleware('permission:add news', ['only' => ['create','store']]);
         $this->middleware('permission:edit news', ['only' => ['edit','update']]);
         $this->middleware('permission:delete news', ['only' => ['destroy']]);
         $this->middleware('permission:list news', ['only' => ['index']]);
    }

    public function index(Request $request)
    {
        // News::query()->delete();
        
        $headers = ['ID', 'Tiêu đề', 'Ảnh' ,'Nội dung','Điểm seo', 'Ngày Đăng'];
            
        $query = News::query();

        if ($request->has('search')) {
            $search = $request->input('search');
 
            $query->where('title', 'like' ,"%{$search}%");
 
        }

        $news = $query->with('category')->orderBy('published_at', 'desc')->paginate(10);
        
        return view('admin.news.index', compact('news', 'headers'));
    }

    public function create()
    {
        $categories = Category::all()->where('is_active', '=', ACTIVE);
        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'image' => 'nullable|image|max:1024|mimes:jpeg,jpg,png,gif,webp',
            'seo_heading' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string|max:255',
            'primary_key' => 'nullable|string|max:255',
            'secondary_key' => 'nullable|string|max:255',
            'seo_score' => 'required|integer',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            // Store image in the public disk
            $imagePath = $request->file('image')->store('images/news', 'public');
        }

        // $slug = Str::slug($request->title, '-');

        $author = Auth::id();

        $store = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'author_id' => $author,
            'published_at' => Carbon::now(),
            'views' => 0,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'seo_heading' => $request->seo_heading,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'primary_key' => $request->primary_key,
            'secondary_key' => $request->secondary_key,
            'seo_score' => $request->seo_score,
        ]);

        if ($store) {
            return redirect()->route('admin.news.edit', $store->id)->with('success', 'News created successfully.');
        }

        return abort(500);
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all()->where('is_active', '=', ACTIVE);
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'image' => 'nullable|image|max:1024|mimes:jpeg,jpg,png,gif,webp',
            'seo_heading' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string|max:255',
            'primary_key' => 'nullable|string|max:255',
            'secondary_key' => 'nullable|string|max:255',
            'seo_score' => 'required|integer',
        ]);

        $currentFile = $news->image;

        if ($request->hasFile('image')) {

            if ($currentFile) {
                Storage::disk('public')->delete($currentFile);
            }
            // put image in the public storage
            $filePath = $request->file('image')->store('images/news/', 'public');

            $news->image = $filePath;
        } 

        // $slug = Str::slug($request->title, '-');

        $author = Auth::id();

        $news->title = $request->title;
        $news->content = $request->content;
        $news->slug = $request->slug;
        $news->author_id = $author;        
        $news->category_id = $request->category_id;
        $news->seo_heading = $request->seo_heading;
        $news->seo_description = $request->seo_description;
        $news->seo_title = $request->seo_title;
        $news->seo_keywords = $request->seo_keywords;
        $news->primary_key = $request->primary_key;
        $news->secondary_key = $request->secondary_key;
        $news->seo_score = $request->seo_score;
        
        $news->save();

        return redirect()->back()->with('success', 'News update successfully.');

    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $currentFile = $news->image;

        if ($currentFile) {
            Storage::disk('public')->delete($currentFile);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
}
