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

        //$posts = \App\Posts::all();
        return view('frontend.index', ['allposts' => $posts]);
    }
}

//SELECT * FROM table_name ORDER BY CAST(field_name as SIGNED INTEGER) ASC
