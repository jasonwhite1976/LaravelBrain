<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;

class PostsController extends Controller

{

    public function index()
    {
      return view('backend.newpost');
    }

    public function thepost($slug)
    {
        $post = \App\Posts::where('slug', $slug)->first();
        return view('backend.thepost', ['post' => $post]);
    }

    //GET
    public function editpost($slug)
    {
        $post = \App\Posts::where('slug', $slug)->first();
        return view('backend.editpost', ['post' => $post]);
    }

    //GET
    public function allposts()
    {
        $allposts = \App\Posts::all();
        return view('backend.allposts', ['allposts' => $allposts]);
    }

    //POST
    public function newpost(Request $request)
    {
      $this->validate($request, [
        'title' => 'required|max:255',
        'slug' => 'required|max:255',
        'post_homepage_position' => 'max:255',
        'post_date' => 'required|max:255',
        'post_content' => 'required',
        'post_excerpt' => 'filled',
        'post_image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'post_seo_title' => 'filled',
        'post_seo_description' => 'filled'
      ]);

      $data = $request->input('post_content');
      $post = new \App\Posts;
      $dom = new \DomDocument();
      $dom->loadHtml($data, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

      $images = $dom->getElementsByTagName('img');

      foreach($images as $img) {
        $src = $img->getAttribute('src');

        if(preg_match('/data:image/', $src)) {

          preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
          $mimetype = $groups['mime'];

          $filename = uniqid();
          $filepath = "/uploads/$filename.$mimetype";

          // @see http://image.intervention.io/api/
  				$image = Image::make($src)
  			  // resize if required
  			  // ->resize(300, 200)
  			  ->encode($mimetype, 100) 	// encode file to the specified mimetype
  			  ->save(public_path($filepath));
  				$new_src = asset($filepath);
  				$img->removeAttribute('src');
  				$img->setAttribute('src', $new_src);

        }
      }

      //$post_image_file = time().'.'.$request->post_image->getClientOriginalExtension();
      $post_image_file = time().'.'.$request->post_image->getClientOriginalName();
      $request->post_image->move(public_path('uploads'), $post_image_file);

      $post->post_image = $post_image_file;
      $post->title = $request->input('title');
      $post->slug = $request->input('slug');
      $post->post_homepage_position = $request->input('post_homepage_position');
      $post->post_date = $request->input('post_date');
      $post->post_excerpt = $request->input('post_excerpt');
      $post->post_seo_title = $request->input('post_seo_title');
      $post->post_seo_description = $request->input('post_seo_description');

      $post->post_content = $dom->saveHTML();
      $post->save();

      return redirect('/admin/allposts');
    }

    //POST
    public function edit_post(Request $request, $slug)
    {
      $this->validate($request, [
        'title' => 'required|max:255',
        'slug' => 'required|max:255',
        'post_homepage_position' => 'max:255',
        'post_date' => 'required|max:255',
        'post_content' => 'required',
        'post_excerpt' => 'filled',
        'post_image' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'post_seo_title' => 'filled',
        'post_seo_description' => 'filled'
      ]);

      $data = $request->input('post_content');
      $post = \App\Posts::where('slug', $slug)->first();
      $dom = new \DomDocument();
      $dom->loadHtml($data, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

      $images = $dom->getElementsByTagName('img');

      foreach($images as $img) {
        $src = $img->getAttribute('src');

        if(preg_match('/data:image/', $src)) {

          preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
          $mimetype = $groups['mime'];

          $filename = uniqid();
          $filepath = "/uploads/$filename.$mimetype";

          // @see http://image.intervention.io/api/
  				$image = Image::make($src)
  			  // resize if required
  			  // ->resize(300, 200)
  			  ->encode($mimetype, 100) 	// encode file to the specified mimetype
  			  ->save(public_path($filepath));
  				$new_src = asset($filepath);
  				$img->removeAttribute('src');
  				$img->setAttribute('src', $new_src);

        }
      }

      //$post_image_file = time().'.'.$request->post_image->getClientOriginalExtension();
      if( $request->post_image !== null) {
        $post_image_file = time().'.'.$request->post_image->getClientOriginalName();
        $request->post_image->move(public_path('uploads'), $post_image_file);
        $post->post_image = $post_image_file;
      }

      $post->title = $request->input('title');
      $post->slug = $request->input('slug');
      $post->post_homepage_position = $request->input('post_homepage_position');
      $post->post_date = $request->input('post_date');
      $post->post_excerpt = $request->input('post_excerpt');
      $post->post_seo_title = $request->input('post_seo_title');
      $post->post_seo_description = $request->input('post_seo_description');

      $post->post_content = $dom->saveHTML();
      $post->save();

      return redirect('/admin/allposts');
    }

    public function delete($slug)
    {
      $post = \App\Posts::where('slug', $slug)->first();
      $post->delete();
      return redirect('/admin/allposts');
    }

}
