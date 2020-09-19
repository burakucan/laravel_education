@extends('layouts.app')
@section('page_title','Hobbies')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">All the hobbies</div>
          <div class="card-body">
            <ul class="list-group">
              @foreach($hobbies as $hobby)
                <li class="list-group-item">
                  <a title="Show Details"href="/hobby/{{$hobby->id}}">{{$hobby->name}}</a>
                  <form class="float-right ml-2" action="/hobby/{{$hobby->id}}" method="post">
                    @csrf
                    @method("DELETE")
                    <input class="btn btn-sm btn-outline-danger" type="submit" value="Delete">

                  </form>
                  <a class="btn btn-sm btn-light float-right mr-2"href="/hobby/{{$hobby->id}}/edit"><i class="fas fa-edit"></i>   Edit Hobby</a>

                </li>
              @endforeach
            </ul>
            <div class="mt-3">
              <a class="btn btn-success btn-sm" href="/hobby/create"><i class="fas fa-plus-circle"></i> Create new Hobby</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
