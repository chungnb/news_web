<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfomationPage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:list news | add news | edit news | delete news', ['only' => ['index','store']]);
         $this->middleware('permission:add custom pages', ['only' => ['create','store']]);
         $this->middleware('permission:edit custom pages', ['only' => ['edit','update']]);
         $this->middleware('permission:delete custom pages', ['only' => ['destroy']]);
         $this->middleware('permission:list custom pages', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $headers = ['ID', 'Tiêu đề', 'Slug', 'Content', 'Trạng thái'];

        $query = InfomationPage::query();

        if ($request->has('search')) {
            $search = $request->input('search');
 
            $query->where('title', 'like' ,"%{$search}%");
 
         }

        $pageCustom = $query->orderby('updated_at', 'desc')->paginate(DEFAULT_PAGE);

        return view('admin.single_page.index', compact('pageCustom', 'headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.single_page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'content' => ['required'],
        ]);

        $pages = InfomationPage::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'is_active' => $request->is_active ? ACTIVE : NOT_ACTIVE
        ]);
        if ($pages) {
            return redirect()->route('admin.page-custom.edit', $pages->id)->with('success', 'Tạo video thành công');
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
        $pages = InfomationPage::findOrFail($id);

        return view('admin.single_page.edit', compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'content' => ['required'],
        ]);

        $pages = InfomationPage::findorfail($id);

        $pages->title = $request->title;
        $pages->slug = $request->slug;
        $pages->content =  $request->content;
        $pages->is_active = $request->is_active ? ACTIVE : NOT_ACTIVE;
   
        $pages->save();

        return redirect()->back()->with('success', 'Cập nhật video thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pages = InfomationPage::findOrFail($id);

        $pages->delete();

        return redirect()->back()->with('success', 'Xóa tin thành công');
    }
}
