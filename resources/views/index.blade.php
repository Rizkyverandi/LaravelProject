@extends('layout.home')

@section('content')
<div class="container">
    <div class="row" style="margin: auto">
      <div class="col">
        <nav class="navbar navbar-light" style="background-color:  #333333">
          <h3 class="navbar-light" style="color: white">Drama</h3>
          <a href="/kategori/1">
          <button class="btn btn-outline-success my-2 my-sm-0" type="button">View all</button>
            </a>
      </nav>
      </div>
    </div>
    <div class="row" style="margin: auto">
      @foreach ($movies as $drama)
      <div class="col">
        <div class="card" style="width: 15rem;">
          <img src="/images/{{$drama->photo}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" style="color: darkgrey" >{{$drama->title}}</p>
            <a href="/detail/{{$drama->id}}" class="btn btn-primary">View Movie</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="container">
    <div class="row" style="margin: auto">
      <div class="col">
        <nav class="navbar navbar-light" style="background-color: #333333">
          <h3 style="color: white">Kids</h3>
            <a href="/kategori/2">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">View all</button>
              </a>
      </nav>
      </div>
    </div>
    <div class="row" style="margin: auto">
      @foreach ($kids as $kid)
      <div class="col">
        <div class="card" style="width: 15rem;">
          <img src="/images/{{$kid->photo}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" style="color: darkgrey">{{$kid->title}}</p>
            <a href="/detail/{{$kid->id}}" class="btn btn-primary">View Movie</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <div class="container">
    <div class="row" style="margin: auto">
      <div class="col">
        <nav class="navbar navbar-light" style="background-color: #333333;">
          <h3 style="color: white">Tv Show</h3>
            <a href="/kategori/3">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">View all</button>
              </a>
      </nav>
      </div>
    </div>
    <div class="row" style="margin: auto">
      @foreach ($tv as $shows)
      <div class="col">
        <div class="card" style="width: 15rem;">
          <img src="/images/{{$shows->photo}}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text" style="color: darkgray">{{$shows->title}}</p> 
            <a href="/detail/{{$shows->id}}" class="btn btn-primary">View Movie</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection

