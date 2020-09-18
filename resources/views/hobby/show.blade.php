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
          </div>
        </div>
        <div class="mt-2">
          <a class="btn btn-primary btn-sm" href="/hobby"><i class="fas fa-arrow-left"></i> Back to Overview</a>
        </div>
      </div>
    </div>
  </div>
@endsection
