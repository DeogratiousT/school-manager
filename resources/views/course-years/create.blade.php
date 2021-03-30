@extends('layouts.app')

@section('page-title','Course Years')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Course Years</a></li>
        <li class="breadcrumb-item"><a href="{{ route('courses.years.index',$course) }}">{{ $course->name }}</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('courses.years.store',$course) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="year_id">Course Name</label>
                <select class="form-control {{ $errors->has('year_id') ? ' is-invalid' : '' }}" id="year_id" name="year_id" required>
                    @foreach ($years as $year)
                        <option value="{{ $year->id }}">{{ $year->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('year_id'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('year_id') }}
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