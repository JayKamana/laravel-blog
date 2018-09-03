@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

  <div class="panel panel-default">
    <div class="panel-heading">
    <h2 class="text-center">
    Edit Post: {{$post->title}}
  </h2>
    </div>
    <div class="panel-body">
      <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input id="title" type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group">
          <label for="featured">Featured</label>
          <input id="featured" type="file" name="featured" class="form-control">
        </div>
        <div class="form-group">
          <label for="category">Select a category</label>
          <select name="category_id" id="category" class="form-control">
            @foreach($categories as $category)
              <option value="{{ $category->id }}" 
                @if($post->category->id == $category->id)
                  selected
                @endif
              >{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        @foreach($tags as $tag)
        <div class="form-check">
          <input name="tags[]" type="checkbox" class="form-check-input" id="tag{{$tag->id}}" value="{{$tag->id}}"
          @foreach($post->tags as $t)
            @if($tag->id == $t->id)
              checked
            @endif
          @endforeach

          >
          <label class="form-check-label" for="tag{{$tag->id}}">{{$tag->tag}}</label>
        </div>
        @endforeach
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}"</textarea>
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