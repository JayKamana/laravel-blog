@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

  <div class="panel panel-default">
    <div class="panel-heading">
    <h2 class="text-center">
    Edit Category: {{$category->name}}
  </h2>
    </div>
    <div class="panel-body">
      <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input id="name" type="text" name="name" value="{{ $category->name }}" class="form-control">
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