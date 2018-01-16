@extends('frontend.layouts.app')

@section('content')

<div class="slick-container">
  <div><img src="//www.hexagonbrain.com/img/frontend/building.jpg" /></div>
  <div><img src="//www.hexagonbrain.com/img/frontend/leaves.jpg" /></div>
  <div><img src="//www.hexagonbrain.com/img/frontend/coralbrain.jpg" /></div>
</div>

<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
          <h1>Hexagon Brain</h1>
          <p>Built with Laravel, Hexagon Brain is a web app that currently has the following functionality:</p>
          <ul style="list-style:outside">
            <li>register</li>
            <li>sign in</li>
            <li>transactional emails</li>
            <li>user management</li>
            <li>create posts and links</li>
            <li>comment on posts</li>
          </ul>
          <p>The site is for hosting and sharing tutorials about web development and other similar content.</p>
        </div>
    </div><!--row-->
</div><!--container-->

<div class="container">
  <hr>

    <div class="row mb-4 text-center">
        <div class="col-md-4">
          <i class="fa fa-2x fa-code"></i>
          <h2>Code</h2>
          <p>It doesn't look so shiny to me.</p>
        </div>
        <div class="col-md-4">
          <i class="fa fa-2x fa-pencil-square-o"></i>
          <h2>Posts</h2>
          <p>It doesn't look so shiny to me.</p>
        </div>
        <div class="col-md-4">
          <i class="fa fa-2x fa-wrench"></i>
          <h2>Resources</h2>
          <p>It doesn't look so shiny to me.</p>
        </div>
    </div><!--row-->

</div><!--container-->

<div class="container">

  <div class="row">
    <div class="col-sm-12">
      <hr>
      <h2 class="pull-left">Latest Posts</h2>
    </div>
  </div>

    @php
      $postcount = 0;
    @endphp

    @foreach ($all_posts as $post)

    @if( 0 === $postcount % 3 )
      <div class="row">
    @endif

    <div class="col-md-4">
      <p style="text-align:center"><img style="width:140px;border-radius:50%;" src="{!! $post->post_image !!}" /></p>
      <h2 style="text-align:center"><a class="post-link" href="{{ URL::to('post/'.$post->slug) }}">{!! $post->title !!}</a></h2>
      {!! $post->post_date !!}
      @php
          $tagless = strip_tags($post->post_content);
          $truncated = str_limit($tagless, 100, ' ');
      @endphp
      <p>{{ $truncated }}<a class="post-link" href="{{ URL::to('post/'.$post->slug) }}">read more</a></p>
    </div>

    @if( 0 === ($postcount + 1) % 3 )
      </div><!--row-->
    @endif

        @php
          $postcount++;
        @endphp

        @endforeach

      </div>

  </div><!--container-->

<div class="container">

  <div class="row">
    <div class="col-sm-12">
      <hr>
      <h2 class="pull-left">Links</h2>
    </div>
  </div>

    @php
      $postcount = 0;
    @endphp

    @foreach ($all_links as $link)

    @if( 0 === $postcount % 3 )
      <div class="row">
    @endif

    <div class="col-md-4 text-center">
      <a href="{!! $link->url !!}">{!! $link->icon !!}</a>
      <h2><a class="post-link" href="{!! $link->url !!}">{!! $link->title !!}</a></h2>
      <p><a class="post-link" href="{!! $link->url !!}">{!! $link->description !!}</a></p>
    </div>

    @if( 0 === ($postcount + 1) % 3 )
      </div><!--row-->
    @endif

    @php
      $postcount++;
    @endphp

    @endforeach

  </div>

  </div><!--container-->

@endsection
