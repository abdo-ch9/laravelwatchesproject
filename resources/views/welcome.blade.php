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
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
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
        <section class="py-0" id="header">
            <div class="bg-holder" style="background-image:url(/assets/img/gallery/header-bg.png);background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center min-vh-75 min-vh-xl-100">
                    <div class="col-md-8 col-lg-6 text-md-start text-center">
                        <h1 class="display-1 lh-sm text-uppercase text-light">Custom Watches For <br class="d-none d-xxl-block" /> Any Occasion</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-black py-8 pt-0 container" id="store">
            <div class="bg-holder" style="background-image:url(/assets/img/gallery/store-bg.png);background-position:left bottom;background-size:contain;">
            </div>
            <!--/.bg-holder-->
            <div class="container">
                <div class="row flex-center">
                    <div class="col-6 order-md-0 text-center text-md-start"></div>
                    <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start">
                        <div class="col-4 position-relative ms-auto py-5"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                        <div class="carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row h-100">
                                        <div class="col-12">
                                            <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase">Our store</h5>
                                            <p class="my-4 pe-xl-5">Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100">
                                        <div class="col-12">
                                            <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase">Our store</h5>
                                            <p class="my-4 pe-xl-5">Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100">
                                        <div class="col-12">
                                            <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase">Our store</h5>
                                            <p class="my-4 pe-xl-5">Memphis clinched a spot in the play-in tournament with the victory, but the fight for seeding continues. The race for the No. 8 spot in the West -- and the safety net of having to win just one of two games to make the playoffs -- could come down to the regular seasons final day, when Memphis and Golden State meet. The good thing for the Grizzlies is they dont have to leave home until that matchup as they have games against Dallas and two against Sacramento before the finale.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-0 pb-6" id="collections">
            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mt-7">
                        <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">Collections</h5>
                    </div>
                    <div class="col-12">
                        <nav>
                            <div class="nav nav-tabs watch-tabs mb-4 justify-content-end" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true">LATEST </button>
                                <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="false">POPULAR</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                                <div class="carousel slide" id="carouselLatest" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <div class="row h-100 align-items-center flex-wrap">
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0 d-flex">
                                                    <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="/assets/img/gallery/hublot_noir.png" alt="test" />

                                                        <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                                            <h6 class="text-primary">650.00 Dh</h6>
                                                            <h4 class="text-light">Hublot Big Bang Collection </h4>
                                                        </div>
                                                        <a class="stretched-link" href=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="/assets/img/gallery/rolex arab numbers silver.jpg" alt="..." />
                                                        <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                                            <h6 class="text-primary">250.00 dh</h6>
                                                            <h4 class="text-light">Rolex Oyster Perpetual Silver Dial​</h4>
                                                        </div><a class="stretched-link" href=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="card bg-black text-white p-6 pb-8"><img class="card-img" src="/assets/img/gallery/rolex gold green.jpg" alt="..." />
                                                        <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                                            <h6 class="text-primary">250.00 DH</h6>
                                                            <h4 class="text-light">Gold Watch Rolex Day-Date Diamond​</h4>
                                                        </div><a class="stretched-link" href=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPopular" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselPopular" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-6 bg-light">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center"><img src="assets/img/gallery/pngegg.png" style="width: 30%;" alt="brands" /></div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center"><img src="assets/img/gallery/swatch.png" alt="brands" /></div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center"><img src="assets/img/gallery/2577ab9c9b3fe141394e4fbc81be0ace.png" style="width: 30%;" alt="brands" /></div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center"><img src="assets/img/gallery/zenith.png" alt="brands" /></div>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="testimonial">

            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto text-center my-5">
                        <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">what customers are saying</h5>
                    </div>
                </div>
                <div class="row flex-center h-100">
                    <div class="col-xl-9">
                        <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 justify-content-center">
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow card-span p-3 bg-black">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center"><img class="img-fluid" src="/assets/img/gallery/smith.png" width="80" alt="testimonials" />
                                                        <div class="flex-1 ms-4">
                                                            <h6 class="fs-lg-1 mb-1 text-uppercase">amanda smith</h6>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow card-span p-3 bg-black">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center"><img class="img-fluid" src="/assets/img/gallery/sandra-willims.png" width="80" alt="testimonials" />
                                                        <div class="flex-1 ms-4">
                                                            <h6 class="fs-lg-1 mb-1 text-uppercase">Ainara Vergara</h6>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 justify-content-center">
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow card-span p-3 bg-black">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/smith.png" width="80" alt="testimonials" />
                                                        <div class="flex-1 ms-4">
                                                            <h6 class="fs-lg-1 mb-1 text-uppercase">Niek Bove</h6>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow card-span p-3 bg-black">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/sandra-willims.png" width="80" alt="testimonials" />
                                                        <div class="flex-1 ms-4">
                                                            <h6 class="fs-lg-1 mb-1 text-uppercase">Ainara Vergara</h6>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100 justify-content-center">
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow card-span p-3 bg-black">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/smith.png" width="80" alt="testimonials" />
                                                        <div class="flex-1 ms-4">
                                                            <h6 class="fs-lg-1 mb-1 text-uppercase">amanda smith</h6>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="card h-100 shadow card-span p-3 bg-black">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/sandra-willims.png" width="80" alt="testimonials" />
                                                        <div class="flex-1 ms-4">
                                                            <h6 class="fs-lg-1 mb-1 text-uppercase">Ainara Vergara</h6>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 mt-4 fw-light lh-lg">Nisi cumque in necessitatibus molestiae eaque excepturi ab. Laboriosam ipsam voluptatem voluptatibus labore quam nihil. Quasi occaecati quos ratione quia aut molestiae velit et.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 flex-center">
                                <div class="col-auto position-relative z-index-2">
                                    <ol class="carousel-indicators">
                                        <li class="active mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="0"></li>
                                        <li class="mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
                                        <li class="mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 pt-7" id="contact">

            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-4 col-xl-3 mb-3">
                        <h4 class="lh-lg fw-bold text-light">WATCH</h4>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-3 mb-3">
                        <h5 class="lh-lg fw-bold text-light">MENU</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Shipping Info</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Refunds</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">How to Order</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">How to Track</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Size Guides</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-3 mb-3">
                        <h5 class="mb-5"></h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">Contact Us</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none text-uppercase fw-bold" href="#!">my account</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-xl-3">
                        <h5 class="lh-lg fw-bold text-light text-uppercase">Signup For our Latest News</h5>
                        <div class="row input-group-icon mb-5">
                            <div class="col-12">
                                <form class="row row-cols-lg-auto g-0 align-items-center">
                                    <div class="col-8 col-lg-9">
                                        <label class="visually-hidden" for="colFormLabel">Username</label>
                                        <div class="input-group">
                                            <input class="rounded-end-0 form-control" id="colFormLabel" type="email" placeholder="email address" />
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-3">
                                        <button class="btn btn-primary rounded-start-0" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-700"></div>
                <div class="row flex-center my-3">
                    <div class="col-md-6 order-1 order-md-0">

                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end"><a href="#!"><span class="me-4" data-feather="facebook"></span></a><a href="#!"> <span class="me-4" data-feather="instagram"></span></a><a href="#!"> <span class="me-4" data-feather="youtube"></span></a><a href="#!"> <span class="me-4" data-feather="twitter"></span></a></div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->




        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
