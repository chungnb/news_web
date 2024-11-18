<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomSeoPage;
use App\Models\CustomSeoPageLvkd;
use Illuminate\Support\Facades\Auth;

class CustomSeoPageController extends Controller
{
    public function index () {
        $seoPage = CustomSeoPage::findOrFail(1);
        return view('admin.customSeoPage', compact('seoPage'));
    }

    public function store (Request $request, $id) {
        $request->validate([
            'home_seo_heading' => 'nullable|string|max:255',
            'home_seo_title' => 'nullable|string|max:255',
            'home_seo_description' => 'nullable|string|max:255',
            'home_seo_keywords' => 'nullable|string|max:255',

            'about_seo_heading' => 'nullable|string|max:255',
            'about_seo_title' => 'nullable|string|max:255',
            'about_seo_description' => 'nullable|string|max:255',
            'about_seo_keywords' => 'nullable|string|max:255',

            'video_seo_heading' => 'nullable|string|max:255',
            'video_seo_title' => 'nullable|string|max:255',
            'video_seo_description' => 'nullable|string|max:255',
            'video_seo_keywords' => 'nullable|string|max:255',

            'tuyen_dung_seo_heading' => 'nullable|string|max:255',
            'tuyen_dung_seo_title' => 'nullable|string|max:255',
            'tuyen_dung_seo_description' => 'nullable|string|max:255',
            'tuyen_dung_seo_keywords' => 'nullable|string|max:255',
        ]);

        $seoPage = CustomSeoPage::findOrFail($id);

        // Cập nhật dữ liệu
        $seoPage->update([
            'home_seo_heading' => $request->input('home_seo_heading'),
            'home_seo_title' => $request->input('home_seo_title'),
            'home_seo_description' => $request->input('home_seo_description'),
            'home_seo_keywords' => $request->input('home_seo_keywords'),
            'about_seo_heading' => $request->input('about_seo_heading'),
            'about_seo_title' => $request->input('about_seo_title'),
            'about_seo_description' => $request->input('about_seo_description'),
            'about_seo_keywords' => $request->input('about_seo_keywords'),
            'video_seo_heading' => $request->input('video_seo_heading'),
            'video_seo_title' => $request->input('video_seo_title'),
            'video_seo_description' => $request->input('video_seo_description'),
            'video_seo_keywords' => $request->input('video_seo_keywords'),
            'tuyen_dung_seo_heading' => $request->input('tuyen_dung_seo_heading'),
            'tuyen_dung_seo_title' => $request->input('tuyen_dung_seo_title'),
            'tuyen_dung_seo_description' => $request->input('tuyen_dung_seo_description'),
            'tuyen_dung_seo_keywords' => $request->input('tuyen_dung_seo_keywords'),
            'author_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Seo Pages update successfully.');

    }

    public function lvkd () {
        // CustomSeoPageLvkd::create([
        //     'xnk_seo_heading' => 'CCCCC',
        //     'author_id' => Auth::id(),
        // ]);
        $seoPageLvkd = CustomSeoPageLvkd::findOrFail(1);
        return view('admin.customSeoPageLvkd', compact('seoPageLvkd'));
    }

    public function storeLvkd (Request $request, $id) {
        $request->validate([
            'xnk_seo_heading' => 'nullable|string|max:255',
            'xnk_seo_title' => 'nullable|string|max:255',
            'xnk_seo_description' => 'nullable|string|max:255',
            'xnk_seo_keywords' => 'nullable|string|max:255',

            'ecommerce_seo_heading' => 'nullable|string|max:255',
            'ecommerce_seo_title' => 'nullable|string|max:255',
            'ecommerce_seo_description' => 'nullable|string|max:255',
            'ecommerce_seo_keywords' => 'nullable|string|max:255',

            'kd_seo_heading' => 'nullable|string|max:255',
            'kd_seo_title' => 'nullable|string|max:255',
            'kd_seo_description' => 'nullable|string|max:255',
            'kd_seo_keywords' => 'nullable|string|max:255',
        ]);

        $seoPage = CustomSeoPageLvkd::findOrFail($id);

        // Cập nhật dữ liệu
        $seoPage->update([
            'xnk_seo_heading' => $request->input('xnk_seo_heading'),
            'xnk_seo_title' => $request->input('xnk_seo_title'),
            'xnk_seo_description' => $request->input('xnk_seo_description'),
            'xnk_seo_keywords' => $request->input('xnk_seo_keywords'),
            'ecommerce_seo_heading' => $request->input('ecommerce_seo_heading'),
            'ecommerce_seo_description' => $request->input('ecommerce_seo_description'),
            'ecommerce_seo_title' => $request->input('ecommerce_seo_title'),
            'ecommerce_seo_keywords' => $request->input('ecommerce_seo_keywords'),
            'kd_seo_heading' => $request->input('kd_seo_heading'),
            'kd_seo_title' => $request->input('kd_seo_title'),
            'kd_seo_description' => $request->input('kd_seo_description'),
            'kd_seo_keywords' => $request->input('kd_seo_keywords'),
            'author_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'LVKD Seo Pages update successfully.');

    }
}
