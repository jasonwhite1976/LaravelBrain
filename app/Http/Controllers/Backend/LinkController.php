<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
 * Class LinkSubmitController.
 */
class LinkController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $links = \App\Link::all();
        return view('backend.newlink', ['links' => $links]);
    }

    //GET
    public function all_links()
    {
        $all_links = \App\Link::all();
        return view('backend.all_links', ['all_links' => $all_links]);
    }

    /**
     * @param LinkSubmitRequest $request
     *
     * @return mixed
     */

    public function newlink(Request $request)
    {

      $data = $request->validate([
          'title' => 'required|max:255',
          'url' => 'required|max:255',
          'icon' => 'required|max:255',
          'description' => 'required|max:255',
      ]);

      $link = new \App\Link;
      $link->title = $data['title'];
      $link->url = $data['url'];
      $link->icon = $data['icon'];
      $link->description = $data['description'];

      // Save the model
      $link->save();
      return redirect('/admin/all_links');

    }

    //GET
    public function editlink($id)
    {
        $link = \App\Link::find($id);
        return view('backend.editlink', ['link' => $link]);
    }

    public function edit_link(Request $request, $id)
    {

      $data = $request->validate([
          'title' => 'required|max:255',
          'url' => 'required|max:255',
          'icon' => 'required|max:255',
          'description' => 'required|max:255',
      ]);

      $link = \App\Link::find($id);
      $link->title = $data['title'];
      $link->url = $data['url'];
      $link->icon = $data['icon'];
      $link->description = $data['description'];

      // Save the model
      $link->save();
      return redirect('/admin/all_links');

    }

    public function deletelink($id)
    {
      $link = \App\Link::find($id);
      $link->delete();
      return redirect('/admin/all_links');
    }


}
