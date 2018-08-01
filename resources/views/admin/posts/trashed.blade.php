@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <table class="table table-hover">
        <thead>
          <th>Image</th>
          <th>Title</th>
          <th>Restore</th>
          <th>Delete</th>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr>
            <td><img src="{{$post->featured}}" alt="Featured image" style="height:50px; width:90px"></td>
            <td>{{ $post->title }}</td>
            <td>
              <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-success btn-xs">
                Restore
              </a>
            </td>
            <td>
              <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-danger btn-xs">
                Delete
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
  

@stop