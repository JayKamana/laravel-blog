@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Published Posts
      </div>
      <div class="panel-body">
          <table class="table table-hover">
              <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
              </thead>
              <tbody>
                @if($posts->count() > 0)
                @foreach($posts as $post)
                <tr>
                  <td><img src="{{$post->featured}}" alt="Featured image" style="height:50px; width:90px"></td>
                  <td>{{ $post->title }}</td>
                  <td>
                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info btn-xs">
                    Edit
                  </a>
                </td>
                  <td>
                    <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger btn-xs">
                      Trash
                    </a>
                  </td>
                </tr>
                @endforeach
                @else
                  <tr>
                    <th colspan="5" class="text-center">No published posts</th>
                  </tr>
                @endif
              </tbody>
            </table>   
      </div>

</div>
  

@stop