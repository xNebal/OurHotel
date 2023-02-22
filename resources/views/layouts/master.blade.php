<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    @include('layouts.head')
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="home" class="logo"> <span class="logoclass">Hotel de Luna</span> </a>
                <a href="home" class="logo logo-small"> <img src="{{ URL::to('assets/img/hotel_logo.jfif') }}"
                        alt="Logo" width="30" height="30"> </a>
            </div>
            @include('layouts.main-headerbar')
        </div>
        @include('layouts.main-sidebar')
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12 mt-5">

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">@yield('Dashboard')</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @yield('content')
                @include('layouts.footer-scripts')
</body>

</html>