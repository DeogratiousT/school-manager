@extends('layouts.app')

@section('content')
        <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('images/small/small-1.jpg') }}" alt="..." class="d-block img-fluid" style="width:100%; height:500px; opacity:0.9;">
                    <div class="carousel-caption d-none d-md-block" style="background-color:#fff;opacity:0.75; border-radius:3px">
                        <h3 class="text-dark"><b>Start Learning</b></h3>
                        <p class="text-dark">Begin your academic excellence by enrolling in the course of your choice from out catalogue</p>
                        <a href="{{ route('learn-index') }}" class="btn btn-outline-success">Start Learning</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/small/small-3.jpg') }}" alt="..." class="d-block img-fluid" style="width:100%; height:500px; opacity:0.9;">
                    <div class="carousel-caption d-none d-md-block" style="background-color:#fff;opacity:0.75; border-radius:3px">
                        <h3 class="text-dark"><b>Latest Courses</b></h3>
                        <p class="text-dark">Explore our most Recent accredited courses</p>
                        <a href="#latest-courses" class="btn btn-outline-success">Latest Courses</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/small/small-2.jpg') }}" alt="..." class="d-block img-fluid" style="width:100%; height:500px; opacity:0.9;">
                    <div class="carousel-caption d-none d-md-block" style="background-color:#fff;opacity:0.75; border-radius:3px">
                        <h3 class="text-dark"><b>Register</b></h3>
                        <p class="text-dark">Register an account with us today and learn with us</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- START FEATURES 1 -->
        <section class="py-5 bg-light-lighten border-top border-bottom border-light" id="latest-courses">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3 class="text-success"><b>Latest Courses</b></h3>
                            <p class="text-muted mt-2">Explore our most recently accreddited courses</p>
                        </div>
                    </div>
                </div>

                @if (count($courses) > 0)
                    <div class="row mt-4 mb-4">
                        <div class="col-12">
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                    @foreach ($courses as $course)
                                        <div class="card" id="course-card">
                                            <img class="card-img-top" style="height:220px;" src="{{ asset('storage/cover-images/'.$course->cover_image) }}" alt="Cover Image">
                                            <div class="card-body">
                                                <h4 class="card-title"><a href="{{ route('learn-show',['course'=>$course]) }}" class="btn btn-link text-success" style="text-align:left; font-size:0.75em;">{{ $course->name }}</a></h4>
                                            </div>
                                            <div class="card-footer">
                                                <i class="bx bx-user"></i>&nbsp;20
                                                &nbsp;&nbsp;
                                                <i class="bx bx-heart"></i>&nbsp;85
                                            </div>
                                        </div> <!-- end card-->
                                    @endforeach
                                </div> <!-- end card-deck-->
                            </div> <!-- end card-deck-wrapper-->
                        </div> <!-- end col-->
                    </div>

                    <hr>

                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a href="{{ route('learn-index') }}" class="btn btn-outline-success">Browse All Courses</a>
                            </div>
                        </div>
                    </div>

                    
                @else 
                    <div class="text-center">
                        <p>Courses Coming Soon</p>
                    </div>
                @endif

            </div>
        </section>
        <!-- END FEATURES 1 -->

@endsection