@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-12 topper">
        <div class="col-sm-2">
          <p><img style="width:140px;border-radius:50%;" src="{!! $post->post_image !!}" /></p>
        </div>
        <div class="col-sm-10">
          <h1>{!! $post->title !!}</h1>

          <div class="">
            {!! $post->post_content !!}
          </div>

          <div class="comments">
            <comment comment-url="{{ $post->slug }}" @can('view backend') is_full_admin="{!! 'true' !!}" @endcan></comment>
          </div>

        </div><!--col-->
    </div><!--row-->
</div>
@endsection
