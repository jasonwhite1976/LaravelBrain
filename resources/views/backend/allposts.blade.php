@extends('backend.layouts.app')

@section('content')
    <div class="row mb-12">
        <div class="col">

          <h1>Edit Posts</h1>

            <div class="links">
              <ul>
                @foreach ($allposts as $post)
                    <li>
                      <a title="view post" class="post-link" href="{{ URL::to('admin/post/'.$post->slug) }}">{!! $post->slug !!}</a>
                      <a title="edit post" class="post-link" href="{{ URL::to('admin/editpost/'.$post->slug) }}"> &nbsp; <span class="fa fa-pencil"></span></a>
                      <a title="delete post" class="post-link" href="{{ URL::to('admin/deletepost/'.$post->slug) }}" data-method="delete"> &nbsp; <span class="fa fa-trash"></span></a>
                    </li>
                @endforeach
              </ul>
            </div>

        </div><!--col-->
    </div><!--row-->
@endsection
