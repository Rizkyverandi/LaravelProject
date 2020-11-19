<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
     <title>Kategori</title>

     <style>
       .checked {
          color: orange;
        }
     </style>
</head>
<body class="navbar-light" style="background-color: #e3f2fd;">
  <nav class="navbar  navbar-dark bg-dark">
    <a class="navbar-brand" href="#">BeeFlix</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Drama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tv Show</a>
        </li>
      </ul>
    </div>
  </nav >
@foreach ($mov as $item)
    
  <div class="container-fluid">
      <div class="row" style="margin-top: 25px; margin-left: 30px">
        <div class="col-4">
            <div class="card" style="width: 25rem; margin-top: 35px">
                <img src="/images/{{$item->photo}}" class="card-img-top" alt="..." >
            </div>
        </div>
        <div class="col-8">
            <div class="col" >
              <div class="col" style="text-align: end;">
                <a href="/kategori/{{$item->genre_id}}">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="button">Back</button>
                    </a>
                    <a href="/">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="button">View all Movies</button>
                        </a>
              </div>
                <h1 style="font-size: 60px ; text-align: left">{{$item->title}}</h1>
                <dt>Rating : </dt>
                @for ($i = 1; $i <= $item->rating; $i++)
                  <span class="fa fa-star checked"></span>  
                @endfor  
                <dt>Description</dt>            
                <p class="lead">
                    {{$item->description}}
                </p>
                           @if ($item->genre_id==1)
                              <dt>Kategori : Drama </dt>  
                            @elseif  ($item->genre_id==2)                            
                            <dt>Kategori : Kids </dt>  
                            @else
                            <dt>Kategori : Tv Show </dt>  
                            @endif
@endforeach
                <br>
                <div class="container">
                  <div class="row" >
                    <div class="col">
                      <table class="table table-dark" style=" width: 900px ;">
                        <thead>
                          <tr>
                            <th scope="col">Episode</th>
                            <th scope="col">Title</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($eps as $it)
                          <tr>
                            <td>{{$it->episode}}</td>
                            <td>{{$it->title}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
    
                      {{$eps->links()}}
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>