@extends('layouts.app')

@section('content')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>{{ $course->name }}</h2>
        </div>
    </div><!-- End Breadcrumbs -->
    <div class="py-2 m-0">
        <div class="container">
            <div class="media mb-2">
                <img class="d-flex mr-3 rounded-circle" src="{{ asset('storage/cover-images/'.$course->cover_image) }}" alt="Cover Image" height="100" width="100">
                <div class="media-body">
                    <h5 class="mt-0">Course Description</h5>
                    {{ $course->description }}
                </div>
            </div>

            <hr class="my-3">

            <div class="row justify-content-center">
                <div class="col-10">
                    <h3>Course Requirements</h3>
                    <div>
                        {!! $course->requirements !!}
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="row justify-content-center">
                <div class="col-4">
                    <a href="{{ route('learn-enroll',['course'=>$course]) }}" class="btn btn-success d-block p-2">Enroll Course</a>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection