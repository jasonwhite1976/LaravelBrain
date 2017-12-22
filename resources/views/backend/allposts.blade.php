@extends('backend.layouts.app')

@section('content')
    <div class="row mb-12">
        <div class="col">

          <h1>All Posts</h1>

            <div class="links">
              <ol>
                @foreach ($posts as $post)
                    <li>
                      <a href="{{ URL::to('admin/post/'.$post->id) }}">{!! $post->id !!}</a>
                      <a href="{{ URL::to('admin/deletepost/'.$post->id) }}" data-method="delete"> &nbsp; <span class="fa fa-trash"></span></a>
                    </li>
                @endforeach
              </ol>
            </div>

        </div><!--col-->
    </div><!--row-->
@endsection
