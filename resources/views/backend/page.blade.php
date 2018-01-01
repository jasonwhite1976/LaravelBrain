@extends('backend.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/comment.css') }}" />
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Example Page {{ $pageId }}</div>

                <div class="panel-body">


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div id="app">
            <comment comment-url="{{ $pageId }}"></comment>
          </div>
        </div>
    </div>
</div>
@endsection
