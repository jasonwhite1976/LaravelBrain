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

      /*
        $data = $request->validate([
            'post_content' => 'required',
        ]);

        $post = new \App\Posts;
        $post->post_content = $data['post_content'];
*/
        //$post->save();


        $this->validate($request, [
            'post_content' => 'required'
        ]);


        $message=$request->input('post_content');

        $post = new \App\Posts;

        $dom = new \DomDocument();

        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');
       // foreach <img> in the submited message
        foreach($images as $img){
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                $filepath = "/uploads/$filename.$mimetype";
                // @see http://image.intervention.io/api/
                //$image = Image::make($src)
                  // resize if required
                  /* ->resize(300, 200) */
                  //->encode($mimetype, 100)  // encode file to the specified mimetype
                  //->save(public_path($filepath));
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!-

        $post->post_content = $dom->saveHTML();
        $post->save();

        return redirect('/admin/post');
    }

    public function delete($id)
    {
      $post = \App\Posts::find($id);
      $post->delete();
      return redirect('/admin/allposts');
    }

}
