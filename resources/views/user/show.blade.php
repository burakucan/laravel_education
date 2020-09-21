@extends('layouts.app')
@section('page_title','Hobbies')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div style="font-size: 150%" class="card-header">{{$user->name}}</div>
             <div class="card-body">
                  <p><b>My Motto </b>: <br> {{$user->motto}}</p>
                  <p><b>About Me </b>: <br> {{$user->about_me}}</p>
                    <div class="mx">
                        @if($user->hobbies->count() > 0)
                            <h5 class="mt-5 mb-2">Hobbies of <b>{{$user->name}}</b></h5>
                        <ul class="list-group mt-2 mb-2">
                            @foreach($user->hobbies as $hobby)
                                <li class="list-group-item">
                                    <a title="Show Details" href="/hobby/{{$hobby->id}}">{{$hobby->name}}</a>
                                    <div class="float-right mx-auto mr-2">{{$hobby->created_at->diffForHumans()}}</div>
                                    @auth
                                        <br>
                                        @foreach($hobby->tags as $tag)
                                            <a href="/hobby_tag/tag/{{$tag->id}}"><span class="badge badge-{{$tag->style}}">{{$tag->name}}</span></a>
                                        @endforeach
                                    @endauth

                                </li>
                            @endforeach
                        </ul>
                        @else
                            <b>{{$user->name}}</b> has not created any hobbies yet.
                        @endif
                    </div>
              <div>
                  <a class="btn btn-primary btn-sm mt-3" href="{{URL::previous()}}"><i class="fas fa-arrow-left"></i> Back to Overview</a>
              </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
