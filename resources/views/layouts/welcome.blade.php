<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Mobilite</title>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

<style>
  .login {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 10px;
      gap: 10px;

      position: absolute;
      left: 86.94%;
      right: 3.82%;
      top: 24.14%;
      bottom: 49.61%;

      background: #E92877;
      border-radius: 90px;

      width: 133px;
      height: 38.07px;

      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-size: 24px;
      line-height: 29px;
      /* identical to box height */


      color: #FFFFFF;


      /* Inside auto layout */

      flex: none;
      order: 0;
      flex-grow: 0;
  }

  .sign-up {
      position: absolute;
      left: 79.89%;
      right: 12.93%;
      top: 21.14%;
      bottom: 49.61%;

      font-family: 'Inter';
      font-style: normal;
      font-weight: 700;
      font-size: 24px;
      line-height: 29px;

  }

  .navbar {
      padding: 10px;
  }
</style>
  <!-- Example Code -->
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/icon-remove-1@2x.png" alt="icon remove 1" width="402" height="80"></a>
    <ul class="nav justify-content-end">
      <li class="sign-up">
        <a class="nav-link active text-dark" aria-current="page" href="{{ route('register') }}">Sign up</a>
      </li>
      <li class="login">
        <a class="nav-link active text-light" aria-current="page" href="{{ route('login') }}">Login</a>
      </li>  
  </div>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="/insight">Insight</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="/FAQ">FAQ</a>
        </li>
        @if (Auth::check() && Auth::user()->level == 'admin')
        <li class="nav-item">
          <a class="navbar-brand" href="/Users Data">Users Data</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
</nav>
 <!-- End Example Code -->
 </body>
</html>
<main class="py-4">
            @yield('navbar')
        </main>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">

<br>
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-4">
          <!-- Content -->
          <p>
          <img class="icon-removebg-previe-1" src="https://anima-uploads.s3.amazonaws.com/projects/634dff4ec578a6714c3871c0/releases/634dff5c1815fb1b369a7f12/img/icon-removebg-preview-1@2x.png" alt="icon-removebg-preview 1" width= "358px" height="247px"/>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Office
          </h6>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> +6200000000</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            +6200000000
          </p>
          <p><i class="fas fa-phone me-3"></i> +6200000000</p>
          <p><i class="fas fa-print me-3"></i> +6200000000</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-light text-center p-4" style="background-color: #0D6EA5;">
    Copyright
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->