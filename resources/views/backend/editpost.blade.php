@extends('backend.layouts.app')

@section('content')

<h1>Edit Post</h1>

<form action="/admin/edit_post/{!! $post->slug !!}" method="post" enctype="multipart/form-data">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

	<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

            <div class="form-group">

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{!! $post->title !!}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="url" name="slug" placeholder="slug" value="{!! $post->slug !!}">
                    @if($errors->has('slug'))
                        <span class="help-block">{{ $errors->first('slug') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="post_homepage_position">Homepage active/position</label>
                    <input type="number" class="form-control" id="post_homepage_position" name="post_homepage_position" value="{!! $post->post_homepage_position !!}">
                </div>
                <div class="form-group{{ $errors->has('post_date') ? ' has-error' : '' }}">
                    <label for="post_date">Date</label>
                    <input type="text" class="form-control" id="post_date" name="post_date" placeholder="post_date" value="{!! $post->post_date !!}">
                    @if($errors->has('post_date'))
                        <span class="help-block">{{ $errors->first('post_date') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                    <label for="post_excerpt">Post Excerpt</label>
                    <input type="text" class="form-control" id="post_excerpt" name="post_excerpt" placeholder="Excerpt" value="{!! $post->post_excerpt !!}">
                    @if($errors->has('post_excerpt'))
                        <span class="help-block">{{ $errors->first('post_excerpt') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('post_seo_title') ? ' has-error' : '' }}">
                    <label for="post_seo_title">SEO title</label>
                    <input type="text" class="form-control" id="post_seo_title" name="post_seo_title" placeholder="" value="{!! $post->post_seo_title !!}">
                    @if($errors->has('post_seo_title'))
                        <span class="help-block">{{ $errors->first('post_seo_title') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('post_seo_description') ? ' has-error' : '' }}">
                    <label for="post_seo_description">SEO description</label>
                    <input type="text" class="form-control" id="post_seo_description" name="post_seo_description" placeholder="" value="{!! $post->post_seo_description !!}">
                    @if($errors->has('post_seo_description'))
                        <span class="help-block">{{ $errors->first('post_seo_description') }}</span>
                    @endif
                </div>
                <p>Current Image - {!! $post->post_image !!}</p>
                <div class="form-group{{ $errors->has('post_image') ? ' has-error' : '' }}">
                    <label for="post_image">New Image</label>
                    <input type="file" class="form-control" id="post_image" name="post_image">
                    @if($errors->has('post_image'))
                        <span class="help-block">{{ $errors->first('post_image') }}</span>
                    @endif
                </div>

                <strong>Details:</strong>
                <textarea id="summernote" class="form-control" name="post_content">
                  {!! $post->post_content !!}
                </textarea>

            </div>

     </div>

     <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Update</button>

    </div>

</form>

</html>
@endsection
