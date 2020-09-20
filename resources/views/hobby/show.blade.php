@extends('layouts.app')
@section('page_title','Hobbies')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">Hobby Details</div>
          <div class="card-body">
            <b>{{$hobby->name}}</b>
            <p>{{$hobby->description}}</p>
              @foreach($hobby->tags as $tag)
                  <span class="badge badge-{{$tag->style}}">{{$tag->name}}</span>
              @endforeach

              <div>
                  <a class="btn btn-primary btn-sm mt-3" href="{{URL::previous()}}"><i class="fas fa-arrow-left"></i> Back to Overview</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
