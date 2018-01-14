@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-12 topper">
        <div class="col">
            <div class="links">
              <ul>
                @foreach ($links as $link)
                    <li><a href="{{ $link->url }}">{{ $link->title }}</a></li>
                @endforeach
              </ul>
            </div>
        </div><!--col-->
    </div><!--row-->
</div>
@endsection
