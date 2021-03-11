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
    <div class="float-left">
        <h4>{{ $course->name }}</h4>
    </div>

    <div class="float-right">
        <a href="{{ route('courses.destroy', $course) }}" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-course-form_{{ $course->id }}').submit();">Delete</a>
        <form id="delete-course-form_{{ $course->id }}" action="{{ route('courses.destroy', $course) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
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
    </ul>

    <div class="tab-content">
        <div class="tab-pane show active" id="nav-details">
            <div class="row">        
                <div class="col-lg-6 col-md-12 col-sm-12">
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
                                <img src="{{ asset('storage/cover-images/'.$course->cover_image) }}" width="100%" height="300px">
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
                <div class="col-lg-6">
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <p>Course Required Uploads
                                <span class="float-right mr-2" data-toggle="tooltip" data-placement="bottom" title="Edit Course Required Uploads">
                                    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#course-uploads">
                                        <i class="mdi mdi-square-edit-outline mdi-18px"></i>
                                    </button>                            
                                </span>
                            </p><hr>
                            <div class="list-group">
                                {!!$course->uploads!!}
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

    <!-- Course Uploads Edit modal -->
    <div class="modal fade" id="course-uploads" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <label for="uploads">Course Required Uploads</label>
                            <textarea class="form-control {{ $errors->has('uploads') ? ' is-invalid' : '' }}" id="uploads" rows="5" name="uploads" required>{{ $course->uploads }}</textarea>
                            @if ($errors->has('uploads'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('uploads') }}
                                </span>
                            @endif

                            <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'uploads' );
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