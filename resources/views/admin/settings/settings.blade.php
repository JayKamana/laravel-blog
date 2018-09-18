@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

  <div class="panel panel-default">
    <div class="panel-heading">
    <h2 class="text-center">
    Edit blog settings
  </h2>
    </div>
    <div class="panel-body">
      <form action="{{ route('settings.update') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="site_name">Site name</label>
          <input id="site_name" type="text" value="{{ $setting->site_name }}" name="site_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input id="address" type="text" value="{{ $setting->address }}" name="address" class="form-control">
        </div>

          <div class="form-group">
              <label for="number">Contact Number</label>
              <input id="number" type="text" value="{{ $setting->contact_number }}" name="contact_number" class="form-control">
            </div>

        <div class="form-group">
          <label for="email">Contact Email</label>
          <input id="email" type="email" value="{{ $setting->contact_email }}" name="contact_email" class="form-control">
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