@extends('backend.layouts.app')

@section('content')
    <div class="row mb-12">
        <div class="col">

          <h1>Edit Links</h1>

            <div class="links">
              <ol>
                @foreach ($all_links as $link)
                    <li>
                      {{ $link->title }}
                      <a title="edit link" class="post-link" href="{{ URL::to('admin/editlink/'.$link->id) }}"> &nbsp; <span class="fa fa-pencil"></span></a>
                      <a title="delete link" class="post-link" href="{{ URL::to('admin/deletelink/'.$link->id) }}" data-method="delete"> &nbsp; <span class="fa fa-trash"></span></a>
                    </li>
                @endforeach
              </ol>
            </div>

        </div><!--col-->
    </div><!--row-->
@endsection
