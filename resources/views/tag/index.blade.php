@extends('layouts.app')
@section('page_title','Tags')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header">All the tags</div>
          <div class="card-body">
            <ul class="list-group">
              @foreach($tags as $tag)
                <li class="list-group-item">
                  <span style="font-size: 130%" class="mr-2 mx-2 badge badge-{{$tag->style}}">{{$tag->name}}</span>
                  <form class="float-right ml-2" action="/tag/{{$tag->id}}" method="post">
                    @csrf
                    @method("DELETE")
                    <input class="btn btn-sm btn-outline-danger" type="submit" value="Delete">

                  </form>
                  <a class="btn btn-sm btn-light float-right mx-2 mr-2"href="/tag/{{$tag->id}}/edit"><i class="fas fa-edit"></i>   Edit Tag</a>
                    <a href="hobby_tag/tag/{{$tag->id}}" class="float-right mr-2 mx-2">Used {{$tag->hobbies->count()}} times</a>

                </li>
              @endforeach
            </ul>
            <div class="mt-3">
              <a class="btn btn-success btn-sm" href="/tag/create"><i class="fas fa-plus-circle"></i> Create new Tag</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
