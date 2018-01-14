@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-12 topper">
        <div class="col">

          <h1>{!! $post->title !!}</h1>

            <div class="">
              {!! $post->post_content !!}
            </div>

            <div class="comments">
              <comment comment-url="{{ $post->slug }}"></comment>
            </div>

        </div><!--col-->
    </div><!--row-->
</div>
@endsection
