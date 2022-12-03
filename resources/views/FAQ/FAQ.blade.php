@extends('layouts.welcome')

@section('navbar')
<!doctype html>
    <html>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>FAQ</title>
            <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
            <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
            <style>body {
    background: #0D6EA5;


    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    min-height: 100vh;
}

.btc-accordion {
    padding-top: 100px;
}

.btc-accordion .card {
    cursor: pointer;
    color: #000000;
    background-color: #FFFFFF;
    border-radius: 15px;
}

.btc-accordion .card a {
    color: #000000;
    text-decoration: none;
}

.accordion-icon[aria-expanded="false"] .fa-angle-down {
    transform: rotate(0deg);
}

.accordion-icon[aria-expanded="true"] .fa-angle-down {
    transform: rotate(180deg);
    transition: 0.5s;
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <section class="btc-accordion">
    <!-- Container -->
    <div class="container">
        <h1 class="text-center text-white">FAQ</h1>
        <br> <br>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="accordion mb-2" id="accordionExample">
                    <!-- Collapse one -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <a class="accordion-icon" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <h5 class="py-2"> Pertanyaan <span class="float-right"><i class="fas fa-angle-down"></i></span></h5>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Id velit ut tortor pretium viverra suspendisse potenti nullam ac.
                            </div>
                        </div>
                    </div>
                    <!-- /Collapse one -->
                    <br>
                    <!-- Collapse Two -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <a class="accordion-icon" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="py-2"> Pertanyaan <span class="float-right"><i class="fas fa-angle-down"></i></span></h5>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Id velit ut tortor pretium viverra suspendisse potenti nullam ac.
                            </div>
                        </div>
                    </div>
                    <!-- /Collapse Two -->
                    <br> 
                    <!-- Collapse Three -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <a class="accordion-icon" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="py-2">Pertanyaan <span class="float-right"><i class="fas fa-angle-down"></i></span></h5>
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Id velit ut tortor pretium viverra suspendisse potenti nullam ac.
                            </div>
                        </div>
                    </div>
                    <!-- /Collapse Three -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
                            <script type='text/javascript'></script>
                            </body>
                        </html>

                        <br> <br> <br><br> <br> <br><br> <br> <br>
@endsection