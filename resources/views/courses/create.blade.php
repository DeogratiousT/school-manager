@extends('layouts.dashboard.app')

@section('page-title','Courses')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Course Name</label>
                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter the Course Name" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Course Description</label>
                <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="5" name="description" required>{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('description') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="objectives">Course Objectives</label>
                <textarea class="form-control {{ $errors->has('objectives') ? ' is-invalid' : '' }}" id="objectives" rows="5" name="objectives" required>{{ old('objectives') }}</textarea>
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

            <div class="form-group">
                <label for="requirements">Course Requirements</label>
                <textarea class="form-control {{ $errors->has('requirements') ? ' is-invalid' : '' }}" id="requirements" rows="5" name="requirements" required>{{ old('requirements') }}</textarea>
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
                <label for="cost">Course Cost</label>
                <input class="form-control {{ $errors->has('cost') ? ' is-invalid' : '' }}" type="number" id="cost" name="cost" value="{{ old('cost') }}" placeholder="Enter the Course cost" required>
                @if ($errors->has('cost'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('cost') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input class="form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" id="start_date" type="date" name="start_date" value="{{ old('start_date') }}" required>
                @if ($errors->has('start_date'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('start_date') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="end_date">End Date</label>
                <input class="form-control {{ $errors->has('end_date') ? ' is-invalid' : '' }}" id="end_date" type="date" name="end_date" value="{{ old('end_date') }}" required>
                @if ($errors->has('end_date'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('end_date') }}
                    </span>
                @endif
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