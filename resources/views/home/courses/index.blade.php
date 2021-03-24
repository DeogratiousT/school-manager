@extends('layouts.app')

@section('content')

        <!-- START FEATURES 1 -->
        <section class="py-2 bg-light-lighten border-top border-bottom border-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3 class="text-primary">All Courses</h3>
                            <p class="text-muted mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. quis quae, dicta fugiat impedit obcaecati!</p>
                        </div>
                    </div>
                </div>

                @if (count($courses) > 0)
                    <div class="row mt-4 mb-4">
                        <div class="col-12">
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                    @foreach ($courses as $course)                                    
                                        <div class="card d-block" id="course-card">
                                            <img class="card-img-top" style="height:220px;" src="{{ asset('storage/cover-images/'.$course->cover_image) }}" alt="Cover Image">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $course->name }}</h5>
                                                <a href="{{ route('learn-show',['course'=>$course]) }}" class="btn btn-primary">View Course</a>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
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

@endsection