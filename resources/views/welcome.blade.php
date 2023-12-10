<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="#">
          <img src="{{asset('ui.png')}}" width="30" height="30" alt="">
        </a>
      </nav>
      @foreach ($posts as $post )
          
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4" style="background-color:lavender;" style="padding:20px">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src={{ asset($post->image) }} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$post ->title}}</h5>
                  <p class="card-text">{{$post ->description}}</p>
                </div>
              </div>
        
        </div>
        <div class="col-sm-4" style="background-color:lavenderblush;"  style="padding:20px">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src={{ asset($post->image) }}  alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$post ->title}}</h5>
                  <p class="card-text">{{$post ->description}}</p>
                </div>
              </div>
        </div>
        <div class="col-sm-4" style="background-color:lavender;"  style="padding:20px">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src={{ asset($post->image) }}  alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$post ->title}}</h5>
                  <p class="card-text">{{$post ->description}}.</p>
                 
                </div>
              </div>
        </div>
      </div>
    </div> 
      @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>