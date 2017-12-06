<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
 * Class LinkSubmitController.
 */
class LinkSubmitController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $links = \App\Link::all();
        return view('backend.linksubmit', ['links' => $links]);
    }

    /**
     * @param LinkSubmitRequest $request
     *
     * @return mixed
     */

    public function send(Request $request)
    {

      $data = $request->validate([
          'title' => 'required|max:255',
          'url' => 'required|max:255',
          'description' => 'required|max:255',
      ]);

      $link = new \App\Link;
      $link->title = $data['title'];
      $link->url = $data['url'];
      $link->description = $data['description'];

      // Save the model
      $link->save();

      return redirect('/admin/linksubmit');

    }

    public function delete($id)
    {
      $link = \App\Link::find($id);
      $link->delete();
      return redirect('/admin/linksubmit');
    }


}
