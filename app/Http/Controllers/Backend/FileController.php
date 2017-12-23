<?php

namespace App\Http\Controllers\Backend;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FileController extends Controller

{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('backend.editor');
    }

    /**
     *
     *
     */

    public function thepost($id)
    {
        $post = \App\Posts::find($id);
        return view('backend.thepost', ['post' => $post]);
    }

    /**
     *
     *
     */

    public function allposts()
    {
        $posts = \App\Posts::all();
        return view('backend.allposts', ['posts' => $posts]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function post(Request $request)
    {
      $this->validate($request, [
        'post_content' => 'required'
      ]);

      $data=$request->input('post_content');

      $post = new \App\Posts;

      $dom = new \DomDocument();

      $dom->loadHtml($data, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

      $images = $dom->getElementsByTagName('img');
      foreach($images as $k => $img)
      {
        $data = $img->getAttribute('src');
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $image_name = "/uploads/" . time().$k.'.png';
        $path = public_path() . $image_name;
        file_put_contents($path, $data);
        $img->removeAttribute('src');
        $img->setAttribute('src', $image_name);
      }

      $post->post_content = $dom->saveHTML();
      $post->save();

      return redirect('/admin/allposts');
    }

    public function delete($id)
    {
      $post = \App\Posts::find($id);
      $post->delete();
      return redirect('/admin/allposts');
    }

}
