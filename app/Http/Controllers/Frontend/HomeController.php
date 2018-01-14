<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $posts = \App\Posts::orderBy('post_homepage_position', 'ASC')->whereNotNull('post_homepage_position')->get();

        $links = \App\Link::all();

        //$posts = \App\Posts::all();
        return view(
        'frontend.index',
        [
          'all_posts' => $posts,
          'all_links' => $links
        ])
        ;
    }
}
