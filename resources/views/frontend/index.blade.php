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
          <p>Fetal stemcells, aren't those controversial? OK, this has gotta stop. I'm going to remind Fry of his humanity the way only a woman can. Is today's hectic lifestyle making you tense and impatient? Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor.</p>
          <p>Hey, guess what you're accessories to. It doesn't look so shiny to me. Yes! In your face, Gandhi! Incidentally, you have a dime up your nose. Bender, this is Fry's decision… and he made it wrong. So it's time for us to interfere in his life.</p>
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
      <p style="text-align:center"><img style="width:140px;border-radius:50%;" src="/uploads/{!! $post->post_image !!}" /></p>
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
      <a class="post-link" href="{!! $link->url !!}">{!! $link->icon !!}</a>
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
