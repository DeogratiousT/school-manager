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
                <label for="description">Course Description</label>
                <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" rows="5" name="description" required>{{ $course->description }}</textarea>
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('description') }}
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
@endsection