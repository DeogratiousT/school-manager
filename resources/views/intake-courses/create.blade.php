@extends('layouts.app')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('intakes.create') }}">Intakes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('intakes.courses.index',$intake) }}">{{ $intake->name }}</a></li>
        <li class="breadcrumb-item active">Add Course</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('intakes.courses.store',$intake) }}" method="POST">
            @csrf
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

            <div class="form-group mb-2 text-center">
                <button class="btn btn-primary btn-block" type="submit">
                    <i class="mdi mdi-content-save"></i> Submit
                </button>
            </div>
        </form>
    </div>

@endsection 