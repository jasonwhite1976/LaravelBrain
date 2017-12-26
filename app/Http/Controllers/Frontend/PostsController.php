<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class LinksController.
 */
class PostsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = \App\Posts::all();
        return view('frontend.allposts', ['allposts' => $posts]);
    }

    public function thepost($slug)
    {
        $post = \App\Posts::where('slug', $slug)->first();
        return view('frontend.thepost', ['post' => $post]);
    }
}
