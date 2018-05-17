<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $serieCates = Category::with('posts')
            ->where('type', 'series')
            ->orderBy('order')
            ->get();

        $cookieCates = Category::with('posts')
            ->where('type', 'cookies')
            ->orderBy('order')
            ->get();
        return view('index', compact('serieCates','cookieCates'));
    }
}
