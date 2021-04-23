@extends('layouts.app')

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
                <label for="alias">Course Alias</label>
                <input class="form-control {{ $errors->has('alias') ? ' is-invalid' : '' }}" type="text" id="alias" name="alias" value="{{ old('alias') }}" placeholder="Enter the Course Alias" required>
                @if ($errors->has('alias'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('alias') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="code">Course Code</label>
                <input class="form-control {{ $errors->has('code') ? ' is-invalid' : '' }}" type="text" id="code" name="code" value="{{ old('code') }}" placeholder="Enter the Course Code" required>
                @if ($errors->has('code'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('code') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="level_id">Course Level</label>
                <select class="form-control {{ $errors->has('level_id') ? ' is-invalid' : '' }}" id="level_id" name="level_id" required>
                    @foreach ($levels as $level)
                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('level_id'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('level_id') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="department_id">Department</label>
                <select class="form-control {{ $errors->has('department_id') ? ' is-invalid' : '' }}" id="department_id" name="department_id" required>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('department_id'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('department_id') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Course Description</label>
                <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="4" name="description" required>{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('description') }}
                    </span>
                @endif

                <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
                <script>
                    CKEDITOR.replace( 'description' );
                </script>
            </div>

            <div class="form-group">
                <label for="requirements">Course Requirements</label>
                <textarea class="form-control {{ $errors->has('requirements') ? ' is-invalid' : '' }}" id="requirements" rows="4" name="requirements" required>{{ old('requirements') }}</textarea>
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
                <textarea class="form-control {{ $errors->has('uploads') ? ' is-invalid' : '' }}" id="uploads" rows="4" name="uploads" required>{{ old('uploads') }}</textarea>
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
                <label for="learning_outcomes">Learning Outcomes</label>
                <textarea class="form-control {{ $errors->has('learning_outcomes') ? ' is-invalid' : '' }}" id="learning_outcomes" rows="4" name="learning_outcomes" required>{{ old('learning_outcomes') }}</textarea>
                @if ($errors->has('learning_outcomes'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('learning_outcomes') }}
                    </span>
                @endif

                <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
                <script>
                    CKEDITOR.replace( 'learning_outcomes' );
                </script>
            </div>

            <div class="form-group">
                <label for="career_opportunities">Career Opportunities</label>
                <textarea class="form-control {{ $errors->has('career_opportunities') ? ' is-invalid' : '' }}" id="career_opportunities" rows="4" name="career_opportunities" required>{{ old('career_opportunities') }}</textarea>
                @if ($errors->has('career_opportunities'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('career_opportunities') }}
                    </span>
                @endif

                <script src="{{ asset('ckeditor/ckeditor/ckeditor.js') }}"></script>
                <script>
                    CKEDITOR.replace( 'career_opportunities' );
                </script>
            </div>

            <div class="form-group mb-2 text-center">
                <button class="btn btn-primary btn-block" type="submit">
                    <i class="mdi mdi-content-save"></i> Submit
                </button>
            </div>
        </form>
    </div>

@endsection 