@extends('backend.layouts.app')

@section('content')

<h1>A New Post</h1>

<form action="/admin/post" method="post">

  {{ csrf_field() }}

	<div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Details:</strong>

            <textarea id="summernote" class="form-control" name="post_content"></textarea>

        </div>

     </div>

     <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</form>

</html>
@endsection
