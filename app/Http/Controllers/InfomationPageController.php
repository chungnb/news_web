<?php

namespace App\Http\Controllers;

use App\Models\InfomationPage;
use Illuminate\Http\Request;

class InfomationPageController extends Controller
{
    public function getPage($slug)
    {
        $data = InfomationPage::where('slug', $slug)
            ->where('is_active', ACTIVE)
            ->first();
        return view('infomationPage', ['data' => $data]);
    }
}
