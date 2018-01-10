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

        @php
          $postcount = 0;
        @endphp

        @foreach ($allposts as $post)

        @if( 0 === $postcount % 3 )
          <div class="row">
        @endif

        <div class="col-md-4">
          <p style="text-align:center"><i class="fa fa-2x fa-pencil"></i></p>
          <h2 style="text-align:center"><a class="post-link" href="{{ URL::to('post/'.$post->slug) }}">{!! $post->title !!}</a></h2>
          {!! $post->created_at !!}
          @php
              $tagless = strip_tags($post->post_content);
              $truncated = str_limit($tagless, 100, ' ');
          @endphp
          <p>{{ $truncated }}<a class="post-link" href="{{ URL::to('post/'.$post->slug) }}">read more</a></p>
        </div>

        @if( 0 === ($postcount + 1) % 3 )
          </div>
        @endif

        @php
          $postcount++;
        @endphp

        @endforeach
    </div><!--row-->
  </div><!--container-->

@endsection
