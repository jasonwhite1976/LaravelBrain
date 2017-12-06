<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class LinksController.
 */
class LinksController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $links = \App\Link::all();
        return view('frontend.links', ['links' => $links]);
    }
}
