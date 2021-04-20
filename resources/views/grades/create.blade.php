@extends('layouts.app')

@section('page-title','Intakes')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('intakes.create') }}">Intakes</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('intakes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Intake Name</label>
                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter the Intake Name" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('name') }}
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
                <label for="academic_year_id">Academic Year</label>
                <select class="form-control {{ $errors->has('academic_year_id') ? ' is-invalid' : '' }}" id="academic_year_id" name="academic_year_id" required>
                    @foreach ($academicYears as $academicYear)
                        <option value="{{ $academicYear->id }}">{{ $academicYear->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('academic_year_id'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('academic_year_id') }}
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