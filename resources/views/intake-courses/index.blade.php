@extends('layouts.app')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('intakes.index') }}">Intakes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('intakes.courses.index',$intake) }}">{{ $intake->name }}</a></li>
        <li class="breadcrumb-item active">Courses</li>
    </ol>
@endsection

@section('page-right')
    <a href="{{ route('intakes.courses.create',$intake) }}" class="btn btn-info mb-2"><i class="mdi mdi-plus-circle mr-1"></i>Add Intake Course</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body"> 
            <h4>{{ $intake->name }} &nbsp; Courses</h4>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($intake->courses) > 0)
                            @foreach ($intake->courses as $course)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $course->name }}</td>
                                    <td>
                                        <a href="{{ route('intakes.courses.destroy',['intake'=>$intake, 'course'=>$course]) }}" data-toggle="tooltip" data-placement="bottom" title="View Course Applications"><i class="mdi mdi-eye text-primary"></i></a>

                                        <a href="{{ route('intakes.courses.destroy',['intake'=>$intake, 'course'=>$course]) }}" data-toggle="tooltip" data-placement="bottom" title="Remove Course"><i class="mdi mdi-delete text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <td colspan="3">No Courses Added</td>   
                        @endif
                    </tbody>
                </table>
            </div>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
@endsection