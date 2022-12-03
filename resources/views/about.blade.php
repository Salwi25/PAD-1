@extends('layouts.welcome')

@section('navbar')
<!DOCTYPE html>

<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <br> <br>
    <body style = "background-color: #0D6EA5">
        <div class="container">
            <h1 class="text-center text-white">About</h1>
        </div>
        <br> <br>
        <div class="d-flex justify-content-around">
          <button class="btn btn-light btn-lg float-right" type="button">New</button>
        </div>
        <br> <br> <br> 
        <div class="container">
            <div class="row">
                <div class="card mb-3" style="max-width: 1440px;">
                    <div class="row g-0">
                      <div class="col-md-2">
                        <img
                          src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png"
                          alt="Trendy Pants and Shoes"
                          class="img-fluid rounded-start"
                        />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <small>definisi</small>
                              </p>
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                          </p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="row">
                <div class="card mb-3" style="max-width: 1440px;">
                    <div class="row g-0">
                      
                      <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <small>definisi</small>
                              </p>
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                          </p>
                          
                        </div>
                      </div>
                      <div class="col-md-2">
                        <img
                          src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png"
                          alt="Trendy Pants and Shoes"
                          class="img-fluid rounded-start"
                        />
                      </div>
                    </div>
                  </div>
            </div>

            <div class="row">
                <div class="card mb-3" style="max-width: 1440px;">
                    <div class="row g-0">
                      <div class="col-md-2">
                        <img
                          src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png"
                          alt="Trendy Pants and Shoes"
                          class="img-fluid rounded-start"
                        />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">
                                <small>definisi</small>
                              </p>
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.
                          </p>
                          
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

</html>
<br> <br> <br>
@endsection