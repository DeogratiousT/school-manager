@extends('layouts.app')

@section('page-title','Dashboard')

@section('page-right')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Layout</a></li>
        <li class="breadcrumb-item active">Detached</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Courses">Courses</h5>
                            <h3 class="my-2 py-1">{{ $courses }}</h3>
                        </div>
                        <a href="{{ route('courses.index') }}" class="btn btn-light btn-block"><i class="mdi mdi-arrow-right-circle-outline"></i> View Courses</a>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Levels">Levels</h5>
                            <h3 class="my-2 py-1">{{ $levels }}</h3>
                        </div>
                        <a href="{{ route('levels.index') }}" class="btn btn-light btn-block"><i class="mdi mdi-arrow-right-circle-outline"></i> View Levels</a>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Departments">Departments</h5>
                            <h3 class="my-2 py-1">{{ $departments }}</h3>
                        </div>
                        <a href="{{ route('departments.index') }}" class="btn btn-light btn-block"><i class="mdi mdi-arrow-right-circle-outline"></i> View Departments</a>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Applications">Applications</h5>
                            <h3 class="my-2 py-1">{{ $applications }}</h3>
                        </div>
                        <a href="{{ route('students.index') }}" class="btn btn-light btn-block"><i class="mdi mdi-arrow-right-circle-outline"></i> View Applications</a>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Intakes">Intakes</h5>
                            <h3 class="my-2 py-1">{{ $intakes }}</h3>
                        </div>
                        <a href="{{ route('intakes.index') }}" class="btn btn-light btn-block"><i class="mdi mdi-arrow-right-circle-outline"></i> View Intakes</a>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Counties">Counties</h5>
                            <h3 class="my-2 py-1">{{ $counties }}</h3>
                        </div>
                        <a href="{{ route('counties.index') }}" class="btn btn-light btn-block"><i class="mdi mdi-arrow-right-circle-outline"></i> View Counties</a>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection