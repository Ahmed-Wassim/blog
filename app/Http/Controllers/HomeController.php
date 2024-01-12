<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.index')
            ->with('user', User::first())
            ->with('banner', Post::where('featured', 1)->limit(1)->first())
            ->with('banner_2', Post::where('featured', 1)->skip(10)->limit(2)->get())
            ->with('recent_posts', Post::orderBy('created_at', 'desc')->limit(4)->get())
            ->with('categories', Category::limit(5)->get())
            ->with('categories_posts', Category::inRandomOrder()->with('posts')->limit(3)->get())
            ->with('popular_posts', Post::orderBy('views', 'desc')->limit(6)->get())
            ->with('tags', Tag::all())
            ->with('random_posts', Post::inRandomOrder()->limit(5)->get());
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('site.post', compact('post'))
            ->with('user', User::first())
            ->with('categories', Category::limit(5)->get())
            ->with('tags', Tag::all());
    }
}
