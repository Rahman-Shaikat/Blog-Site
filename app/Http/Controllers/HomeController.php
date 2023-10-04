<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class HomeController extends Controller
{
    private static $blog;
    public function index()
    {
        return view('front-end.pages.home');
    }

    public function blogAll()
    {
        return view('front-end.pages.blogs', [
            'blogs' => Blog::where('status', 1)
                ->orderBy('id', 'asc')
                ->get(),
            'categories' => Category::all()
        ]);
    }

    public function blogDetails($id)
    {
        return view('front-end.pages.blog-details', [
            'blog' => Blog::find($id),
            'categories' => Category::all()
        ]);
    }
}
