<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:list news | add news | edit news | delete news', ['only' => ['index','store']]);
        $this->middleware('permission:add category', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit category', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete category', ['only' => ['destroy']]);
        $this->middleware('permission:list category', ['only' => ['index']]);
    }
    public function index(Request $request)
    {
        $headers = ['ID', 'Tiêu đề', 'Slug', 'Trạng thái'];

        $query = Category::query();

        if ($request->has('search')) {
            $search = $request->input('search');

            $query->where('name', 'like', "%{$search}%");
        }

        $category = $query->orderby('created_at', 'desc')->paginate(DEFAULT_PAGE);

        return view('admin.category.index', compact('category', 'headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 'title', 'description', 'location', 'num_of_recruitment', 'salary', 'position'
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:categories,name'],
            'seo_heading' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string|max:255',
        ]);

        // $slug = Str::slug($request->name, '-');
        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'is_active' => $request->is_active ? ACTIVE : NOT_ACTIVE,
            'seo_heading' => $request->seo_heading,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
        ]);

        if ($category) {
            return redirect()->route('admin.category.edit', $category->id)->with('success', 'Tạo danh mục thành công');
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
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'seo_heading' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string|max:255',
        ]);

        $category = Category::findOrFail($id);

        // if ($request->name) {
        //     $category->slug = Str::slug($request->name, '-');
            
        // }

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->is_active = $request->is_active ? 1 : 0;
        $category->seo_heading = $request->seo_heading;
        $category->seo_description = $request->seo_description;
        $category->seo_title = $request->seo_title;
        $category->seo_keywords = $request->seo_keywords;

        $category->save();

        return redirect()->back()->with('success', 'Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->back()->with('success', 'Xóa danh mục thành công');
    }
}
