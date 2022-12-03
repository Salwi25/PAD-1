<section style="color: #000; background-color: #0D6EA5;">
@extends('layouts.welcome')

@section('navbar')
<!DOCTYPE html>
<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
          .insight-button {
              font-family: 'Inter';
              font-style: normal;
              font-weight: 600;
              font-size: 20px;
              border: none;
              border-radius: 90px;
              background: #EA2877;
              width: 150px;
              height: 65px;
              color: white;
          }
          .center-button {
              text-align: center;
              background: #EA2877;
              width: 150px;
              height: 65px;
              color: white;
              font-family: 'Inter';
              font-style: normal;
              font-weight: 600;
              font-size: 20px;
              border: none;
              border-radius: 90px;
          }
        </style>
    </head>
    <body>
        <!-- header  -->
        <br><br>
        <div class="jumbotron jumbotron-fluid">
        <section style="background-color: #0D6EA5;">
        <div class="container">
      
        </div>
        <!-- slide -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/banner-1@1x.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_GenshinImpact_miHoYoLimited_S1_2560x1440-91c6cd7312cc2647c3ebccca10f30399" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://media.suara.com/pictures/970x544/2021/09/29/97287-situs-genshin-impact.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-visible"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-visible"></span>
            </button>
          </div>
          <br> <br> <br>
        <!-- deskripsi -->
            <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="text-center text-white">Explore with Us</h1>
                <p class="text-center text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque purus quam,
                    imperdiet a accumsan vel, pulvinar ut justo. Curabitur rutrum elit non orci viverra porta.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dolor lectus. 
                    Aliquam egestas dapibus nibh. Phasellus et lacus id lectus auctor sagittis. 
                    Quisque tristique, lorem in semper dignissim, nisl augue euismod mi, ac tempus sapien 
                    mauris ut leo. Morbi quis interdum ex. </p>
            </div>
            <br> <br> <br> <br>
          
        <!-- use case  -->
        <section style="color: #000; background-color: #f3f2f2;">
        <br> <br>
        <div class="container">
            <h1 class="text-center">Use Case</h1>
            <br> <br>
            <div class="row">
                <div class="col-md-3"><div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png" class="img-fluid"/>
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                    </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Healthcare Policies</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"><div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png" class="img-fluid"/>
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                    </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Transport Policies</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"><div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png" class="img-fluid"/>
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                    </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Retail Industries</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"><div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png" class="img-fluid"/>
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                    </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Housing Policies</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br> <br>
      
        <!-- feature  -->
        <section style="color: #000; background-color: #0D6EA5;">
        <br> <br>
        <div class="container">
            <h1 class="text-center text-white">Feature</h1>
            <br>
            <section class="text-center">
                <div class="row">
                  <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative">
                    <i class="fas fa-cubes fa-3x text-primary mb-4"></i>
                    <h1 class="display-4 text-white">What We Offer</h1>
                    <p class="lead text-white"> We’re offering some features that can be use for various usecases and provide various insight from people’s activities in their daily life
                    </p>
                    <br>    
                    <button type="button" class="insight-button">Insight</button>
                </div>
                
              
                <div class="row-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative">
                    <div class="card" style="width: 801px;">
                    <div class="row no-gutters">
                    <div class="col-sm-5">
                      <img src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png" class="img-fluid" width="200px" height="200px">
                    </div>
                    <div class="col-sm-7">
                      <div class="card-body">
                          <h2 class="card-title">Why Do You Need Mobilite?</h2>
                      </div>
                    </div>
                    </div>
                  
                    <div class="card" style="width: 801px;">
                    <div class="row g-0">
                    <div class="col-sm-5">
                      <img src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/location-update@2x.png" class="img-fluid" width="200px" height="200px">
                    </div>
                    <div class="col-sm-7">
                      <div class="card-body">
                          <h2 class="card-title">Why Do You Need Mobilite?</h2>
                      </div>
                    </div>
                    </div>
                </div>
              </section>
        </div>
        <br> <br> <br>

        <!-- review  -->
        <section style="color: #000; background-color: #f3f2f2;">
            <div class="container py-5">
              <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                  <h3 class="fw-bold mb-4">Review</h3>
                </div>
              </div>
          
              <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                  <div class="card">
                    <div class="card-body py-4 mt-2">
                      <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                          class="rounded-circle shadow-1-strong" width="100" height="100" />
                      </div>
                      <h5 class="font-weight-bold">Teresa May</h5>
                      <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
                      <ul class="list-unstyled d-flex justify-content-center">
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star-half-alt fa-sm text-info"></i>
                        </li>
                      </ul>
                      <p class="mb-2">
                        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                        ad velit ab hic tenetur.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                  <div class="card">
                    <div class="card-body py-4 mt-2">
                      <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                          class="rounded-circle shadow-1-strong" width="100" height="100" />
                      </div>
                      <h5 class="font-weight-bold">Maggie McLoan</h5>
                      <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
                      <ul class="list-unstyled d-flex justify-content-center">
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                      </ul>
                      <p class="mb-2">
                        <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                        sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                        labore laboriosam.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-0">
                  <div class="card">
                    <div class="card-body py-4 mt-2">
                      <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                          class="rounded-circle shadow-1-strong" width="100" height="100" />
                      </div>
                      <h5 class="font-weight-bold">Alexa Horwitz</h5>
                      <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
                      <ul class="list-unstyled d-flex justify-content-center">
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="fas fa-star fa-sm text-info"></i>
                        </li>
                        <li>
                          <i class="far fa-star fa-sm text-info"></i>
                        </li>
                      </ul>
                      <p class="mb-2">
                        <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                        nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                        vestibulum in tempus viverra turpis.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- get started -->
        <br> <br>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="text-center text-white">Get Started!</h1>
                <br> <br>
                <p class="text-center text-white"> Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. </p>
                <br> <br>
                <div class="p-5 text-center">
                  <button type="button" class="center-button">Try Now</button>
                </div>
            </div>
        <br> <br> <br>
            
        </div>        
        <!-- java -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
@endsection