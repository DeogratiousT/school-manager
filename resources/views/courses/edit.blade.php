@extends('layouts.dashboard.app')

@section('page-title','Courses')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
        <li class="breadcrumb-item"><a href="{{ route('courses.show',$course) }}">{{ $course->name }}</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('courses.update',$course) }}" method="POST" enctype="multipart/form-data">
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
                <label for="description">Course Description</label>
                <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="5" name="description" required>{{ $course->description }}</textarea>
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('description') }}
                    </span>
                @endif
            </div>

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

            <div class="form-group">
                <label for="cover_image">Course Cover Image</label>
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
@endsection