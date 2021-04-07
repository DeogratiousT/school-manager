@extends('layouts.app')

@section('page-title','Student Applications')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Student Application</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Enter your First Name" required>
                @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('first_name') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name</label>
                <input class="form-control {{ $errors->has('middle_name') ? ' is-invalid' : '' }}" type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}" placeholder="Enter your Middle Name" required>
                @if ($errors->has('middle_name'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('middle_name') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="Enter your Last Name" required>
                @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('last_name') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="national_id">National ID</label>
                <input class="form-control {{ $errors->has('national_id') ? ' is-invalid' : '' }}" type="number" id="national_id" name="national_id" value="{{ old('national_id') }}" placeholder="Enter your National ID Number" required>
                @if ($errors->has('national_id'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('national_id') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="course_id">Course</label>
                <select class="form-control {{ $errors->has('course_id') ? ' is-invalid' : '' }}" id="course_id" name="course_id" required>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('course_id'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('course_id') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="county_id">County</label>
                <select class="form-control {{ $errors->has('county_id') ? ' is-invalid' : '' }}" id="county_id" name="county_id" required>
                    @foreach ($counties as $county)
                        <option value="{{ $county->id }}">{{ $county->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('county_id'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('county_id') }}
                    </span>
                @endif
            </div>

            <input type="hidden" name="status" value="requested">
            
            <div class="form-group mb-2 text-center">
                <button class="btn btn-primary btn-block" type="submit">
                    <i class="mdi mdi-content-save"></i> Submit
                </button>
            </div>
        </form>
    </div>
@endsection