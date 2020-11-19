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
    <a class="navbar-brand" href="/">BeeFlix</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kategori/1">Drama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kategori/2">Kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kategori/3">Tv Show</a>
        </li>
      </ul>
    </div>
  </nav >
 
        <div class="container">
          <div class="row" style="margin: auto">
            <div class="col">
              <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                @foreach ($ttle as $kats)
                  <h3>{{$kats->name}}</h3>
                @endforeach
                <a href="/">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="button">View all Movies</button>
                    </a>
                    
            </nav>
            </div>
          </div>
          <div class="row" style="margin: auto">
            @foreach ($kat as $kategori)
            <div class="col">
              <div class="card" style="width: 15rem;">
                <img src="/images/{{$kategori->photo}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">
                      <p>{{$kategori->title}}</p>
                      @for ($i = 1; $i <= $kategori->rating ; $i++)
                      <span class="fa fa-star checked"></span>
                      @endfor
                  </p>
                  <a href="/detail/{{$kategori->id}}" class="btn btn-primary">See Details Movie</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      </body>
      </html>