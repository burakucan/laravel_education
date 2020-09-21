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
              @if($hobby->tags->count() > 0)
              <div class="tags mt-2 mb-3">
                  <b>Used Tags</b> (click to remove)
                  <br>
                  @foreach($hobby->tags as $tag)
                      <a href="/hobby/{{$hobby->id}}/tag/{{$tag->id}}/detach"><span class="badge badge-{{$tag->style}}">{{$tag->name}}</span></a>
                  @endforeach
              </div>
              @endif
              @if($avalible_tags->count() > 0)
              <div class="tags mt-3 mb-2">
                  <b>Avalible Tags</b> (click to add)
                  <br>
                  @foreach($avalible_tags as $tag)
                      <a href="/hobby/{{$hobby->id}}/tag/{{$tag->id}}/attach"><span class="badge badge-{{$tag->style}}">{{$tag->name}}</span></a>
                  @endforeach
              </div>
              @endif

              <div>
                  <a class="btn btn-primary btn-sm mt-3" href="{{URL::previous()}}"><i class="fas fa-arrow-left"></i> Back to Overview</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
