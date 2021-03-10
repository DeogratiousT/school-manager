@extends('layouts.dashboard.app')

@section('page-title','Courses')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
        <li class="breadcrumb-item"><a href="{{ route('courses.show',$course) }}">{{ $course->name }}</a></li>
        <li class="breadcrumb-item active">Modules</li>
    </ol>
@endsection
    
@section('content')
    <div class="float-right">
        <a href="{{ route('courses.show',$course) }}" class="btn btn-danger">Delete Course</a>
    </div>

    <div class="clearfix"></div>

    <ul class="nav nav-tabs nav-justified my-3">
        <li class="nav-item">
            <a href="#nav-details" data-toggle="tab" aria-expanded="true" class="nav-link active">
                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                <span class="d-none d-md-block">Details</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#nav-description" data-toggle="tab" aria-expanded="false" class="nav-link">
                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                <span class="d-none d-md-block">Description</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#nav-requirements" data-toggle="tab" aria-expanded="false" class="nav-link">
                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                <span class="d-none d-md-block">Requirements</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#nav-objectives" data-toggle="tab" aria-expanded="false" class="nav-link">
                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                <span class="d-none d-md-block">Objectives</span>
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane show active" id="nav-details">
            <div class="row">        
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <p>Course Details
                                <span class="float-right mr-2" data-toggle="tooltip" data-placement="bottom" title="Edit Course Details">
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#course-details">
                                        <i class="mdi mdi-square-edit-outline mdi-18px"></i>
                                    </button>                            
                                </span>
                            </p>
                            <hr>
                            <div class="list-group">
                                <span><b>Course Name</b> : {{$course->name}}</span><br>
                                <span><b>Cost</b> : KSH. {{$course->cost}}</span><br>
                                <span><b>Start Date</b> : {{$course->start_date}}</span><br>
                                <span><b>End Date</b> : {{$course->end_date}}</span><br>
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <p>Course Cover Image
                                <span class="float-right mr-2" data-toggle="tooltip" data-placement="bottom" title="Edit Course Cover Image">
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#course-cover">
                                        <i class="mdi mdi-square-edit-outline mdi-18px"></i>
                                    </button>                            
                                </span>
                            </p>
                            <hr>
                            <div class="list-group">
                                <img src="{{ asset('storage/cover-images/'.$course->cover_image) }}" width="100%" height="auto">
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
        <div class="tab-pane" id="nav-description">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Course Description
                                <span class="float-right mr-2" data-toggle="tooltip" data-placement="bottom" title="Edit Course Description">
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#course-description">
                                        <i class="mdi mdi-square-edit-outline mdi-18px"></i>
                                    </button>                            
                                </span>
                            </p><hr>
                            <div class="list-group">
                                {{$course->description}}
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
        <div class="tab-pane" id="nav-requirements">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Course Requirements
                                <span class="float-right mr-2" data-toggle="tooltip" data-placement="bottom" title="Edit Course Requirements">
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#course-requirements">
                                        <i class="mdi mdi-square-edit-outline mdi-18px"></i>
                                    </button>                            
                                </span>
                            </p><hr>
                            <div class="list-group">
                                {!!$course->requirements!!}
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
        <div class="tab-pane" id="nav-objectives">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Course Objectives
                                <span class="float-right mr-2" data-toggle="tooltip" data-placement="bottom" title="Edit Course Objectives">
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#course-objectives">
                                        <i class="mdi mdi-square-edit-outline mdi-18px"></i>
                                    </button>                            
                                </span>
                            </p><hr>
                            <div class="list-group">
                                {!! $course->objectives !!}
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    <!-- Course Details Edit modal -->
    <div class="modal fade" id="course-details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Course Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('courses.update',$course) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ $course->name }}" required>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
            
                        <div class="form-group">
                            <label for="cost">Course Cost</label>
                            <input class="form-control {{ $errors->has('cost') ? ' is-invalid' : '' }}" type="number" id="cost" name="cost" value="{{ $course->cost }}" required>
                            @if ($errors->has('cost'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('cost') }}
                                </span>
                            @endif
                        </div>
            
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input class="form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" id="start_date" type="date" name="start_date" value="{{ $course->start_date }}">
                            @if ($errors->has('start_date'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('start_date') }}
                                </span>
                            @endif
                        </div>
            
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input class="form-control {{ $errors->has('end_date') ? ' is-invalid' : '' }}" id="end_date" type="date" name="end_date" value="{{ $course->end_date }}">
                            @if ($errors->has('end_date'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('end_date') }}
                                </span>
                            @endif
                        </div>
            
                        <div class="form-group mb-2 text-center">
                            <button class="btn btn-primary btn-block" type="submit">
                                <i class="mdi mdi-content-save"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Course Description Edit modal -->
    <div class="modal fade" id="course-description" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Course Description</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('courses.update',$course) }}" method="POST">
                        @csrf
                        @method('PUT')
            
                        <div class="form-group">
                            <label for="description">Course Description</label>
                            <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="5" name="description" required>{{ $course->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('description') }}
                                </span>
                            @endif
                        </div>
            
                        <div class="form-group mb-2 text-center">
                            <button class="btn btn-primary btn-block" type="submit">
                                <i class="mdi mdi-content-save"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Course Requirements Edit modal -->
    <div class="modal fade" id="course-requirements" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Course Requirements</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('courses.update',$course) }}" method="POST">
                        @csrf
                        @method('PUT')
            
                        <div class="form-group">
                            <label for="requirements">Course Requirements</label>
                            <textarea class="form-control {{ $errors->has('requirements') ? ' is-invalid' : '' }}" id="requirements" rows="5" name="requirements" required>{{ $course->requirements }}</textarea>
                            @if ($errors->has('requirements'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('requirements') }}
                                </span>
                            @endif

                            <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'requirements' );
                            </script>
                        </div>
            
                        <div class="form-group mb-2 text-center">
                            <button class="btn btn-primary btn-block" type="submit">
                                <i class="mdi mdi-content-save"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Course Objectives Edit modal -->
    <div class="modal fade" id="course-objectives" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Course Obejctives</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('courses.update',$course) }}" method="POST">
                        @csrf
                        @method('PUT')
            
                        <div class="form-group">
                            <label for="objectives">Course Objectives</label>
                            <textarea class="form-control {{ $errors->has('objectives') ? ' is-invalid' : '' }}" id="objectives" rows="5" name="objectives" required>{{ $course->objectives }}</textarea>
                            @if ($errors->has('objectives'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('objectives') }}
                                </span>
                            @endif

                            <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'objectives' );
                            </script>
                        </div>
            
                        <div class="form-group mb-2 text-center">
                            <button class="btn btn-primary btn-block" type="submit">
                                <i class="mdi mdi-content-save"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Course Cover Edit modal -->
    <div class="modal fade" id="course-cover" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Course Obejctives</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('courses.update',$course) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="cover_image">Change Cover Image</label>
                            <input type="file" id="cover_image" name="cover_image" class="form-control-cover_image {{ $errors->has('cover_image') ? ' is-invalid' : '' }}">
                            @if ($errors->has('cover_image'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('cover_image') }}
                                </span>
                            @endif
                        </div>
            
                        <div class="form-group mb-2 text-center">
                            <button class="btn btn-primary btn-block" type="submit">
                                <i class="mdi mdi-content-save"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection

{{-- @extends('layouts.dashboard.app')

@section('page-title','Courses')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
        <li class="breadcrumb-item"><a href="{{ route('courses.show',$course) }}">{{ $course->name }}</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('content')

    <div class="row">        
        <div class="col-lg-12 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <p>Course Details</p><hr>
                    <div class="list-group">
                        <span><b>Course Name</b> : {{$course->name}}</span><br>
                        <span><b>Description</b> : {{$course->description}}</span><br>
                        <span><b>Cost</b> : KSH. {{$course->cost}}</span><br>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <p>Enter Course alias given below to Delete</p><hr>
                    
                    <form action="{{ route('courses.destroy', $course) }}" method="POST">
                        @csrf
                        @method('DELETE')

                            <div class="form-group">
                                <label for="name"><b>{{ $course->slug }}</b></label>
                                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="{{ $course->slug }}" required>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-2 text-center">
                                <button class="btn btn-danger btn-block" type="submit">
                                    <i class="mdi mdi-content-save"></i> Delete Course
                                </button>
                            </div>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>

@endsection --}}