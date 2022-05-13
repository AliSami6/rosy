<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Pigga landing page.">
    <meta name="author" content="Devcrud">
    <title>Rosy | Version 2.1</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Pigga main styles -->
	<link rel="stylesheet" href="assets/css/pigga.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
   
    <!-- First Navigation -->
    <nav class="navbar nav-first navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.png" alt="banner image">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#home">CALL US : <span class="pl-2 text-muted">(+880)1867871200</span></a>
                </li>                   
            </ul>
        </div>
    </nav>
    <!-- End of First Navigation --> 
    <!-- Second Navigation -->

    @include('layouts.frontmenu')
    <!-- End Of Second Navigation --> 
    <!-- Page Header -->
        @foreach($banners as $banner)
            <header class="header">
                <div class="overlay">
                    <img src="/bannerimage/{{$banner->image}}" alt="banner image" class="logo">
                    <h1 class="subtitle">  {{$banner->title}}</h1>
                    <h1 class="title"> {{$banner->subtitle}}</h1> 
                    <a class="btn btn-primary mt-3" href="#book-table">Book A Table</a> 
                </div>      
            </header>
        @endforeach
    <!-- End Of Page Header --> 
    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center">                
                <div class="col-md-6">
                    <h6 class="section-subtitle">Opening Times</h6>
                    <h3 class="section-title">Working Times</h3>
                    <p class="mb-1 font-weight-bold">Monday - Thursday : <span class="font-weight-normal pl-2 text-muted">7:00 am - 12:00 pm</span></p>
                    <p class="mb-1 font-weight-bold">Friday - Saturday : <span class="font-weight-normal pl-2 text-muted">7:00 am - Midnight</span></p>
                    <p class="mb-1 font-weight-bold">Saturday - Sunday : <span class="font-weight-normal pl-2 text-muted">9:00 am - 12:00 pm</span></p>

                    <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Book a table</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <img alt="About Image" src="assets/imgs/about-1.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="About Image" src="assets/imgs/about-2.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="section-devider my-6 transparent"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6 class="section-subtitle">The Great Story</h6>
                    <h3 class="section-title">Our Culinary Journey</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic illo a, aut, eum nesciunt obcaecati deserunt ipsam nostrum voluptate recusandae?</p>
                </div>
                <div class="col-md-6 order-1 order-sm-first">
                    <div class="row">
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-3.jpg" class="w-100 rounded shadow">
                        </div>
                        <div class="col">
                            <img alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" src="assets/imgs/about-4.jpg" class="w-100 rounded shadow">
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Service Section -->
    <section id="service" class="pattern-style-4 has-overlay">
        <div class="container raise-2">
            <h6 class="section-subtitle text-center">Featured Food</h6>
            <h3 class="section-title mb-6 pb-3 text-center">Special Dishes</h3>
            <div class="row">
                @foreach($foods as $food)
                    <div class="col-md-6 mb-4">
                        <a href="" class="custom-list">
                            <div class="img-holder">
                                <img src="/Foodimage/{{$food->image}}" alt="Featured Image">
                            </div>
                            <div class="info">
                                <div class="head clearfix">
                                    <h5 class="title float-left">{{$food->title}}</h5>
                                    <p class="float-right text-primary">Tk.{{$food->price}}</p>
                                </div>
                                <div class="body">
                                    <p>{{$food->description}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>                  
        </div>
    </section>
    <!-- End of Featured Food Section -->

    <!-- Menu Section -->
    <section class="has-img-bg">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Food</h6>
            <h3 class="section-title mb-6 text-center">Main Menu</h3>
            <div class="card bg-light">
                <div class="card-body px-4 pb-4 text-center">                   
                    <div class="row text-left">
                        @foreach($menus as $menu)
                        <div class="col-md-6 my-4">
                            <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                       {{$menu->title}}
                                        <p class="mt-1 mb-0">{{$menu->subtitle}}.</p>
                                    </div>
                                    <h6 class="float-right text-primary">Tk.{{$menu->price}}</h6>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <a href="#book-table" class="btn btn-primary mt-4">Book A Table</a>
                </div>
            </div>                  
        </div>
    </section>
    <!-- End of Menu Section -->

    <!-- Team Section -->
    <section id="team">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Team</h6>
            <h3 class="section-title mb-5 text-center">Talented Chefs</h3>
            <div class="row">
                @foreach($teams as $team)
                <div class="col-md-4 my-3">
                    <div class="team-wrapper text-center">
                        <img src="/teamimage/{{$team->image}}" class="circle-120 rounded-circle mb-3 shadow" alt="team image" style="margin: 0 auto">
                        <h5 class="my-3">{{$team->person_name}}</h5>
                        <p>{{$team->details}}</p>
                        <h6 class="socials mt-3">
                            <a href="javascript:void(0)" class="px-2"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-twitter"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-google"></i></a>
                        </h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Team Section -->

    <!-- Testmonial Section -->
    <section id="testmonial" class="pattern-style-3">
        <div class="container">
            <h6 class="section-subtitle text-center">Best Clients</h6>
            <h3 class="section-title mb-5 text-center">Testmonials</h3>

            <div class="row">
                @foreach($tests as $test )
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="/testimage/{{$test->image}}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">{{$test->person_name}}</h6>
                                    <small class="text-muted mb-0">{{$test->person_title}}</small>     
                                </div>
                            </div>
                            <p class="mb-0">{{$test->details}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->


    <!-- Book Table Section -->
        @include('user.tablebooked')
    <!-- End OF Book Table Section -->

    <!-- Prefooter Section  -->
        @include('layouts.frontfooter')
    <!-- End of Page Footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Pigga js -->
    <script src="assets/js/pigga.js"></script>

</body>
</html>
