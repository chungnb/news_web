<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($categorySlug)
    {
        try {
            $categories = Category::all()->where('is_active', '=', ACTIVE);

            $categoryChoosen = Category::where('slug', $categorySlug)->where('is_active', '=', ACTIVE)->first();

            if ($categoryChoosen === null && $categorySlug !== NEW_ALL) {
                // Nếu không tìm thấy category và slug không phải là NEW_ALL, chuyển hướng tới trang lỗi 404
                return view('errors.404');
            }

            if ($categorySlug == NEW_ALL) {

                $newsBar = News::with('category')->orderBy('published_at', 'desc')->take(5)->get();

                $newsAll = News::with('category')->orderBy('published_at', 'desc')->paginate(5);

            } else {
                $newsBar = News::with('category')->where('category_id', $categoryChoosen->id)->orderBy('published_at', 'desc')->take(5)->get();

                $newsAll = News::with('category')->where('category_id', $categoryChoosen->id)->orderBy('published_at', 'desc')->paginate(5);
            }

            return view("news", compact("categories", "categoryChoosen", "newsBar", "newsAll"));
            
        } catch (\Exception $e) {

            return view('errors.500');

        }
    }

    public function detailRedirect($category, $slug)
    {
        $newUrl = url('/' . $slug);

        // Redirect to the new URL with a 301 status
        return redirect()->to($newUrl, 301);
    }

    public function detail($slug)
{
    try {
        $categories = Category::where('is_active', ACTIVE)->get();

        $news = News::where('slug', $slug)->firstOrFail();

        $categoryChoosen = $news->category;

        $relateNews = News::where('id', '!=', $news->id)
            ->where('category_id', $news->category_id)
            ->orderBy('published_at', 'desc')
            ->take(5)
            ->get();

        $topViews = News::where('category_id', $news->category_id)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        $prevNews = News::where('id', '<', $news->id)
            ->where('category_id', $news->category_id)
            ->orderBy('id', 'desc')
            ->first();

        $nextNews = News::where('id', '>', $news->id)
            ->where('category_id', $news->category_id)
            ->orderBy('id', 'desc')
            ->first();

        $news->increment('views');

        return view('newDetail', compact('news', 'topViews', 'relateNews', 'categoryChoosen', 'prevNews', 'nextNews', 'categories'));

    } catch (\Exception $e) {
        return view('errors.500');
    }
}
}
