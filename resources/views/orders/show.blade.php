<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>velux watch Ecommerce </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/assets/css/theme.css" rel="stylesheet" />
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-inline-flex" href="/"><span class="text-light fs-2 fw-bold ms-2"><img src="/assets/img/gallery/logo_watches_page-0001-removebg-preview.png" alt="" style="width: 15%;"></span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-2"><a class="nav-link fw-bold active" aria-current="page" href="#collections">WATCHES</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-bold" href="{{route('watches.index')}}">STORE</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-bold" href="{{route('contact')}}">CONTACT</a></li>
                    </ul>
                    <form class="d-flex">
                        <a class="text-primary" href="#!">
                            <svg style="margin-top: 10px;" class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg></a>
                        <div class="ms-4 text-light fw-bold" style="margin-top: 10px;">+212 6 25-02-52-26 </div>
                    </form>
                    @if(Auth::check())
                    <li class="nav-item px-5 nav-link fw-bold" style="padding-top: 50px;">
                        <span>bonjour</span>
                        <a class="nav-link fw-bold" href="" style="color: white; display: inline; ">{{ Auth::user()->name }}</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-primary" style="display: inline; margin-left: 50px; margin-top:5px;">Logout</button>
                        </form>
                    </li>
                    @else
                    <div class="ms-4 text-light fw-bold">
                        <button type="button" class="btn btn-sm btn-outline-primary " style="margin-bottom: 10px; color: white;"><a href="{{route('register')}}">register</a></button>
                        <button type="button" class="btn btn-primary " style="margin-bottom: 10px; height:39px;"> <a href="{{route('login')}}">login</a></button>
                    </div>
                    @endif
                </div>
            </div>
        </nav>
    <div class="container" style="padding-top: 200px;">
        <h1>Order Details</h1>
        <p><strong>ID:</strong> {{ $order->id }}</p>
        <p><strong>Name:</strong> {{ $order->name }}</p>
        <p><strong>City:</strong> {{ $order->city }}</p>
        <p><strong>Phone Number:</strong> {{ $order->phone_number }}</p>

        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>