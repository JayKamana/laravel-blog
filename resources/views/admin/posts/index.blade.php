@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <table class="table table-hover">
        <thead>
          <th>Image</th>
          <th>Title</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr>
            <td>Image</td>
            <td>{{ $post->title }}</td>
            <td>
              {{-- <a href="{{ route('posts.edit', ['id' => $posts->id]) }}" class="btn btn-info btn-xs"> --}}
              Edit
            {{-- </a> --}}
          </td>
            <td>
              {{-- <a href="{{ route('posts.delete', ['id' => $posts->id]) }}" class="btn btn-danger btn-xs"> --}}
                Delete
              {{-- </a> --}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
  

@stop