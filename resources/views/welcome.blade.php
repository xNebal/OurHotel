<!doctype html>
<html lang="en">

<head>
    <title>Hotel Del Luna</title>
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
                <a class="navbar-brand" href="">Hotel Del Luna</a>
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
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->fullname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="logout">
                                    logout
                                </a>

                                <form id="logout-form" action="logout" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(assets/img/web_picture1.png);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>Welcome To Our Damascene Hotel</h1>
                        <p>Discover our Luxury Room.</p>
                        <p><a href="booknow" class="btn btn-primary">Book Now</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="heading-wrap text-center element-animate">
                        <h4 class="sub-heading">Stay with our luxury rooms</h4>
                        <h2 class="heading">Stay and Enjoy</h2>
                        <p class="mb-5">هناك العديد من الفنادق البوتيك في وسط المدينة القديمة و لكن لا يشبه أي منها
                            فندقنا
                            فنحن نضيف إلى إقامتكم مقوماتنا المميزة ألا و هي الحماس و اللطف و فن الضيافة</p>
                        <p><a href="about" class="btn btn-primary btn-sm">More About Us</a></p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <img src="assets/img/nahl6031.jpg" alt="Image placeholder" class="img-md-fluid" width="110%">
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 heading-wrap text-center">
                    <h4 class="sub-heading">Our Luxury Rooms</h4>
                    <h2 class="heading">Featured Rooms</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-7">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="assets/img/room1.png" alt="Generic placeholder image" class="img-fluid">
                            <div class="overlap-text">
                                <span>
                                    Featured Room
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </span>
                            </div>
                        </figure>
                        <div class="media-body">
                            <h3 class="mt-0"><a href="#">Presidential Room</a></h3>
                            <ul class="room-specs">
                                <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                                <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                            </ul>
                            <p>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate
                                fringilla. </p>
                            <p><a href="booknow" class="btn btn-primary btn-sm">Book Now From $20</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 room-thumbnail-absolute">
                    <a href="#" class="media d-block room bg first-room"
                        style="background-image: url(assets/img/room10.png); ">
                        <!-- <figure> -->
                        <div class="overlap-text">
                            <span>
                                Hotel Room
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </span>
                            <span class="pricing-from">
                                from $22
                            </span>
                        </div>
                        <!-- </figure> -->
                    </a>

                    <a href="#" class="media d-block room bg second-room"
                        style="background-image: url(assets/img/room13.png); ">
                        <!-- <figure> -->
                        <div class="overlap-text">
                            <span>
                                Hotel Room
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </span>
                            <span class="pricing-from">
                                from $22
                            </span>
                        </div>
                        <!-- </figure> -->
                    </a>

                </div>
            </div>
        </div>
    </section>



    <section class="section-cover" data-stellar-background-ratio="0.5"
        style="background-image: url(assets/img/por_2048.jpg);">
        <div class="container">
            <div class="row justify-content-center align-items-center intro">
                <div class="col-md-9 text-center element-animate">
                    <h2>Relax and Enjoy your Holiday</h2>
                    <p class="lead mb-5">استمتع بخدماتنا المميزة و المقدمة لك خصيصاً لجعل إقامتك مفعمة بالراحة و
                        الاسترخاء ضمن أجواء دمشقية أصيلة</p>
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