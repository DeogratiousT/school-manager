@extends('layouts.app')

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
    
@endsection