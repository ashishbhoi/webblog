<?php

namespace App\Http\Controllers;
use App\Post;

class SitemapController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('sitemap.index')->with('posts', $posts);
    }
}
