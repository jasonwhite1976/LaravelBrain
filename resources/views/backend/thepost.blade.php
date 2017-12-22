@extends('backend.layouts.app')

@section('content')
    <div class="row mb-12">
        <div class="col">

          <h1>Post Title Here</h1>

            <div class="">
              {!! $post->post_content !!}
            </div>

        </div><!--col-->
    </div><!--row-->
@endsection
