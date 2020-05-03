<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->get();

        return view('index', compact('categories'));
    }


    public function post($id)
    {
        $categories = Category::where('status', 1)->get();

        $post = Post::where('id', $id)->first();

        return view('post', compact('categories', 'post'));
    }


    public function category($slug)
    {
        $id = Category::where('slug', $slug)->select('id')->first();
        $categories = Category::where('status', 1)->get();


        $posts = Category::with('posts')->find($id->id);

        return view('category', compact('categories', 'posts'));
    }

    public function posts($date)
    {
        $categories = Category::where('status', 1)->get();

        $posts = Post::with('category', 'user')
            ->where('created_at', 'LIKE', '%' . $date . '%')
            ->where('status', 'published')
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('posts', compact('categories', 'posts'));
    }
}

