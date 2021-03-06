@extends('backend.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('css/comment.css') }}" />
    <div class="row mb-12">
        <div class="col">

          <h1>{!! $post->title !!}</h1>

            <div class="">
              {!! $post->post_content !!}
            </div>

            <div id="app">
              <comment comment-url="{{ $post->slug }}"></comment>
            </div>

        </div><!--col-->
    </div><!--row-->
@endsection
