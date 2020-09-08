@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <marquee bgcolor="red" direction = "left"><a style="color:#ffffff">{{ __('Welcome  ') }}{{ Auth::user()->name }}<a/></marquee>
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-header"><h4>{{ __('update profile picture') }}</h4></div>
                <div class="card-body">
                  <form action="/upload" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="file" name="image"/>
                      <input type="submit" value="upload"/>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
