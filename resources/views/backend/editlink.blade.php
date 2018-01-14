@extends('backend.layouts.app')

@section('content')

            <h1>Edit link</h1>

            <form action="/admin/edit_link/{!! $link->id !!}" method="post">

                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                <div class="col-xs-12 col-sm-12 col-md-12">

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $link->title }}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ $link->url }}">
                    @if($errors->has('url'))
                        <span class="help-block">{{ $errors->first('url') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control" id="icon" name="icon" value='{{ $link->icon }}'>
                    @if($errors->has('icon'))
                        <span class="help-block">{{ $errors->first('icon') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ $link->description }}</textarea>
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </form>

@endsection
