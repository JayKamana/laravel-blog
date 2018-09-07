@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

  <div class="panel panel-default">
    <div class="panel-heading">
    <h2 class="text-center">
    Edit your profile
  </h2>
    </div>
    <div class="panel-body">
      <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Username</label>
          <input id="name" type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" type="email" name="email" class="form-control" value="{{ $user->email }}" >
        </div>

        <div class="form-group">
          <label for="password">New Password</label>
          <input id="password" type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
          <label for="avatar">Upload new avatar</label>
          <input id="avatar" type="file" name="avatar" class="form-control">
        </div>

        <div class="form-group">
          <label for="facebook">Facebook profile</label>
          <input id="facebook" type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}" >
        </div>
        
        <div class="form-group">
          <label for="youtube">Youtube profile</label>
          <input id="youtube" type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}">
        </div>

        <div class="form-group">
          <label for="about">About you</label>
          <textarea name="about" id="about" cols="30" rows="10" class="form-control">{{ $user->profile->about }}</textarea>
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