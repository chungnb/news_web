<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Recruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{

    function __construct()
    {
        //  $this->middleware('permission:list news | add news | edit news | delete news', ['only' => ['index','store']]);
         $this->middleware('permission:add recruitment', ['only' => ['create','store']]);
         $this->middleware('permission:edit recruitment', ['only' => ['edit','update']]);
         $this->middleware('permission:delete recruitment', ['only' => ['destroy']]);
         $this->middleware('permission:list recruitment', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $headers = ['ID', 'Tiêu đề', 'Chi tiết', 'Lương'];

        $query = Recruitment::query();

        if ($request->has('search')) {
            $search = $request->input('search');
 
            $query->where('title', 'like' ,"%{$search}%");
 
         }

        $recruitment = $query->orderby('updated_at', 'desc')->paginate(DEFAULT_PAGE);

        return view('admin.recruitment.index', compact('recruitment', 'headers'));
    }

    public function getDataApply (Request $request) {
        $headers = ['ID', 'Họ và tên', 'Số điện thoại', 'Email', 'Vị trí ứng tuyển', 'File CV' ,'Ngày ứng tuyển'];

        $query = Applicant::query();

        if ($request->has('search')) {
            $search = $request->input('search');
 
            $query->where('full_name', 'like' ,"%{$search}%");
 
         }

        $applicant = $query->orderby('created_at', 'desc')->paginate(DEFAULT_PAGE);

        return view('admin.recruitment.applicant', compact('applicant', 'headers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.recruitment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'location' => ['required', 'string', 'max:255'],
            'num_of_recruitment' => ['required', 'integer', 'min:1', 'max:999'],
            'salary'=> ['required', 'string', 'max:255'],
            'position'=> ['required', 'string', 'max:255'],
            'working_time'=> ['required', 'string', 'max:255'],
            'end_time' => ['required', 'date'],
            'contact_address' => ['nullable', 'string', 'max:255'],
            'seo_heading' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string|max:255',
        ]);
        
        $data = $request->all();
        $data['is_active'] = $request->has('is_active') ? 1 : 0; // Convert the checkbox value to 0 or 1

        $recruitment = Recruitment::create($data);
        if ($recruitment) {
            return redirect()->route('admin.tuyen-dung.edit', $recruitment->id)->with('success', 'Tạo tin tuyển dụng thành công');
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
        $recruitment = Recruitment::findOrFail($id);

        return view('admin.recruitment.edit', compact('recruitment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'location' => ['required', 'string', 'max:255'],
            'num_of_recruitment' => ['required', 'integer', 'min:1', 'max:999'],
            'salary'=> ['required', 'string', 'max:255'],
            'position'=> ['required', 'string', 'max:255'],
            'working_time'=> ['required', 'string', 'max:255'],
            'end_time' => ['required', 'date'],
            'slug' => ['required', 'string', 'max:255'],
            'contact_address' => ['nullable', 'string', 'max:255'],
            'seo_heading' => 'nullable|string|max:255',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string|max:255',
        ]);

        $recruitment = Recruitment::findOrFail($id);

        $recruitment->update([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'num_of_recruitment' => $request->num_of_recruitment,
            'salary' => $request->salary,
            'position' => $request->position,
            'working_time' => $request->working_time,
            'slug' => $request->slug,
            'end_time' => $request->end_time,
            'is_active' => $request->is_active ? ACTIVE : NOT_ACTIVE,
            'contact_address' => $request->contact_address ?? null,
            'seo_heading' => $request->seo_heading,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
        ]);

        return redirect()->back()->with('success', 'Cập nhật tin tuyển dụng thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recruitment = Recruitment::findOrFail($id);

        $recruitment->delete();

        return redirect()->back()->with('success', 'Xóa tin thành công');
    }
}
