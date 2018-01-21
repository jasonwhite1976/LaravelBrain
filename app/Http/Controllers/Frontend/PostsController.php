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
        $current_user = \App\Models\Auth\User::all();
        return view('frontend.thepost', ['post' => $post, 'current_user' => $current_user]);
    }
}
