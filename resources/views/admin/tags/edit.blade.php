@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

  <div class="panel panel-default">
    <div class="panel-heading">
    <h2 class="text-center">
    Edit Tag: {{$tag->tag}}
  </h2>
    </div>
    <div class="panel-body">
      <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Tag</label>
          <input id="name" type="text" name="tag" value="{{ $tag->tag }}" class="form-control">
        </div>
       
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@stop