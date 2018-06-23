<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blog =Blog::orderBy('id', 'desc');
        $search=$request->input('search');
        if(!empty($search))
        {
            $blog->where('head_line','LIKE','%'.$search.'%');
        }
        $blog=$blog->paginate(12);

        return view('blog', compact('blog'));
    }
    public function show($blog_slug)
    {
        $blog = Blog::where('id', $blog_slug)->firstOrFail();

        return view('post', compact('blog'));
    }
}
