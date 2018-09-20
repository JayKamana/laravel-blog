<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;

class FrontEndController extends Controller

{
  public function index()
  {
    return view('index')
      ->with('title', Setting::first()->site_name)
      ->with('categories', Category::take(5)->get())
      ->with('first_post', Post::orderBy('created_at', 'desc')->first())
      ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
      ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
      ->with('webpack', Category::find(5))
      ->with('vue', Category::find(6))
      ->with('settings', Setting::first());
  }

  public function singlePost($slug)
  {
    $post = Post::where('slug', $slug)->first();

    return view('single')
      ->with('post', $post)
      ->with('title', $post->title)
      ->with('settings', Setting::first())
      ->with('categories', Category::take(5)->get());
  }
}