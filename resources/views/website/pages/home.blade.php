@extends('layouts.master')
@section('content')
   <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center">                
                <div class="col-md-6">

                    <h3 class="section-title">Working Times</h3>
                 
                        <p class="mb-1 font-weight-bold">{{ now()->format('l') }} &nbsp;&nbsp;Opening time<span class="font-weight-normal pl-2 text-muted">&nbsp;{{ $about->opentime}}</span></p>
                        <p class="mb-1 font-weight-bold">{{ now()->format('l') }} &nbsp;&nbsp;Closing time<span class="font-weight-normal pl-2 text-muted">&nbsp;{{  $about->closetime }}</span></p>
                  
                       
                  

                    <a href="#book-table" class="btn btn-primary btn-sm w-md mt-4">Book a table</a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                       
                        <div class="col">
                            <img width="460" height="550" alt="About Image" src="uploads/abouts/{{$about->menuone}}" class="w-100 rounded shadow">
                        </div>
                     
                       
                    </div>                  
                </div>
            </div>
            <div class="section-devider my-6 transparent"></div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6 class="section-subtitle">{{$stories->subtitle}}</h6>
                    <h3 class="section-title">{{$stories->title}}</h3>
                    <p>{{$stories->description}}</p>
                </div>
                <div class="col-md-6 order-1 order-sm-first">
                    <div class="row">
                        <div class="col">
                            <img width="460" height="550" alt="story image" src="/uploads/story/{{$stories->storyone}}" class="w-100 rounded shadow">
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
       @include('website.pages.tablebooked')
@endsection
@push('scripts')
@endpush