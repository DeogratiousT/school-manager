@extends('layouts.app')

@section('content')
    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>All Courses</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- START FEATURES 1 -->
        <section class="py-2 bg-light-lighten border-top border-bottom border-light">
            <div class="container">
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
                @else 
                    <div class="text-center">
                        <p>Courses Coming Soon</p>
                    </div>
                @endif

            </div>
        </section>
        <!-- END FEATURES 1 -->
    </main>

@endsection