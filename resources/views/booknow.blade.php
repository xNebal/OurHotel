<!doctype html>
<html lang="en">

<head>
    <title>Hotel Del Luna|Book Now</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/magnific-popup.css') }}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/styletheme.css') }}">
</head>

<body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">Hotel Del Luna</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="welcome">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="rooms">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item cta">
                            <a class="nav-link" href="booknow"><span>Book Now</span></a>
                        </li>
                        @guest
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @endif


                        @if ('Auth::user()->type' == 'client')
                        <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="myreservation">My Reservation</a>
                            <a class="dropdown-item" href="myorders">My Orders</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fullname }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="logout">logout</a>
                                    <form id="logout-form" action="logout" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                        @endif
                        @else
                        <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fullname }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="logout">logout</a>
                                    <form id="logout-form" action="logout" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                        @endguest

                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(assets/img/web_picture1.png);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>Reservation</h1>
                        <p>Discover our Luxury Room.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section">
        <div class="container">
                @guest
                @if (Route::has('register'))
                <p><br>If you Don't Have Account, You can <a class="link" href="{{ route('register') }}">Register</a> here.</p><br>
                @endif
                @if (Route::has('login'))
                <p><br>Or you can Login your account <a class="link" href="{{ route('login') }}">login</a></p>
                @endif
                @else<div class="row">
                <div class="col-md-6">
                    <h2 class="mb-5">Reservation Form</h2>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-sm-6 form-group">

                                <label for="">Arrival Date</label>
                                <div style="position: relative;">
                                    <span class="fa fa-calendar icon"
                                        style="position: absolute; right: 10px; top: 10px;"></span>
                                    <input type='text' class="form-control" id='arrival_date' />
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">

                                <label for="">Departure Date</label>
                                <div style="position: relative;">
                                    <span class="fa fa-calendar icon"
                                        style="position: absolute; right: 10px; top: 10px;"></span>
                                    <input type='text' class="form-control" id='departure_date' />
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="room">Room</label>
                                <select name="" id="room" class="form-control">
                                    <option value="">1 Room</option>
                                    <option value="">2 Rooms</option>
                                    <option value="">3 Rooms</option>
                                    <option value="">4 Rooms</option>
                                    <option value="">5 Rooms</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="room">Guests</label>
                                <select name="" id="room" class="form-control">
                                    <option value="">1 Guest</option>
                                    <option value="">2 Guests</option>
                                    <option value="">3 Guests</option>
                                    <option value="">4 Guests</option>
                                    <option value="">5+ Guests</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write a Note</label>
                                <textarea name="message" id="message" class="form-control " cols="30"
                                    rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Reserve Now" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div></div>
                @endguest
            
        </div>
    </section>
    <!-- END section -->





    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(assets/img/liwan_1.png);">
        <div class="container">
            <div class="row justify-content-center align-items-center intro">
                <div class="col-md-9 text-center element-animate">
                    <h2>Relax and Enjoy your Holiday</h2>
                    </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>Phone Support</h3>
                    <p>24/7 Call us now.</p>
                    <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    <p>We are socialized. Follow us</p>
                    <p>
                        <a href="" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
                        <a href="" class="p-3"><span class="fa fa-twitter"></span></a>
                        <a href="" class="p-3"><span class="fa fa-instagram"></span></a>
                        <a href="" class="p-3"><span class="fa fa-vimeo"></span></a>
                        <a href="" class="p-3"><span class="fa fa-youtube-play"></span></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>

                    <form action="" class="subscribe">
                        <div class="form-group">
                            <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#f4b214" />
    </svg></div> -->


    <script src="{{ URL::to('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/magnific-popup-options.js') }}"></script>
    <script src="{{ URL::to('assets/js/main.js') }}"></script>
</body>

</html>