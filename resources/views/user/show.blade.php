@extends('layouts.app')
@section('page_title','Hobbies')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">{{$user->name}}</div>
             <div class="card-body">
                  <p><b>My Motto </b>: <br> {{$user->motto}}</p>
                  <p><b>About Me </b>: <br> {{$user->about_me}}</p>
              <div>
                  <a class="btn btn-primary btn-sm mt-3" href="{{URL::previous()}}"><i class="fas fa-arrow-left"></i> Back to Overview</a>
              </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
