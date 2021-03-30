@extends('layouts.app')

@section('page-title','Course Years')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Course Years</a></li>
        <li class="breadcrumb-item"><a href="{{ route('courses.years.index',$course) }}">{{ $course->name }}</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('content')
    <div class="float-right">
        <a href="{{ route('courses.years.create',$course) }}" class="btn btn-info mb-2"><i class="mdi mdi-plus-circle mr-1"></i>Add Course Year</a>
    </div>

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body"> 
            <table id="course-years-laratable" class="table table-hover table-centered w-100 dt-responsive nowrap">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($course->years) > 0)
                    @foreach ($course->years as $year)
                        <tr>
                            <td>{{ $year->name }}</td>
                            <td>{{ $year->created_at }}</td>
                            <td>
                                <a href="{{ route('courses.years.destroy',['course'=>$course, 'year'=>$year]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Course Year" onclick="event.preventDefault();document.getElementById('delete-course-year-form_{{ $year->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
                                <form id="delete-course-year-form_{{ $year->id }}" action="{{ route('courses.years.destroy',['course'=>$course, 'year'=>$year]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <td colspan="3">No Years Added Yet</td>    
                        </tr>    
                    @endif
                </tbody>
            </table>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
@endsection