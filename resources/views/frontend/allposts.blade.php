@extends('frontend.layouts.app')

@section('content')
<div class="container topper">
    <div class="row mb-12">
        <div class="col">

          <h1>All Posts</h1>

            <div class="links">
              <ul>
                @foreach ($allposts as $post)
                    <li>
                      <a class="post-link" href="{{ URL::to('post/'.$post->slug) }}">{!! $post->slug !!}</a>
                    </li>
                @endforeach
              </ul>
            </div>

        </div><!--col-->
    </div><!--row-->
</div>
@endsection
