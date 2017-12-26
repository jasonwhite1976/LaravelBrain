@extends('backend.layouts.app')

@section('content')

<h1>Edit Post</h1>

<form action="/admin/edit_post/{!! $post->slug !!}" method="post">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

	<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{!! $post->title !!}">
          @if($errors->has('title'))
              <span class="help-block">{{ $errors->first('title') }}</span>
          @endif
      </div>
      <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
          <label for="slug">Url</label>
          <input type="text" class="form-control" id="url" name="slug" placeholder="URL" value="{!! $post->slug !!}">
          @if($errors->has('slug'))
              <span class="help-block">{{ $errors->first('slug') }}</span>
          @endif
      </div>

      <strong>Details:</strong>
      <textarea id="summernote" class="form-control" name="post_content">
            {!! $post->post_content !!}
      </textarea>

    </div>

     </div>

     <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</form>

</html>
@endsection
