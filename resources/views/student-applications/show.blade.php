@extends('layouts.app')

@section('page-title','Course Years')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
        <li class="breadcrumb-item"><a href="{{ route('courses.show',$course) }}">{{ $course->name }}</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('content')

    <div class="float-left">
        <h4>{{ $course->name }}</h4>
        <p>{{ $course->alias }}</p>
    </div>

    <div class="float-right">
        <a href="{{ route('courses.years.create',$course) }}" class="btn btn-info mb-2"><i class="mdi mdi-plus-circle mr-1"></i>Add Course Year</a>

        <a href="{{ route('courses.edit',$course) }}" class="btn btn-secondary mb-2"><i class="mdi mdi-square-edit-outline mr-1"></i>Edit Course</a>

        <a href="{{ route('courses.destroy', $course) }}" class="btn btn-danger mb-2" onclick="event.preventDefault();document.getElementById('delete-course-form_{{ $course->id }}').submit();"> <i class="mdi mdi-delete mr-1"></i> Delete Course</a>
        <form id="delete-course-form_{{ $course->id }}" action="{{ route('courses.destroy', $course) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>

    <div class="clearfix"></div>

    @if (count($course->years) > 0)
        <div class="accordion custom-accordion" id="custom-accordion-one">
            @foreach ($course->years as $year)
                <div class="card mb-0">
                    <div class="card-header" id="{{ 'heading'.$year->id }}">
                        <h5 class="m-0">
                            <a class="custom-accordion-title @if (!$loop->first) collapsed @endif d-block py-1"
                                data-toggle="collapse" href="{{ '#collapse'.$year->id }}"
                                aria-expanded="@if (!$loop->first) false @else true @endif" aria-controls="{{ "collapse".$year->id }}">
                                {{ $loop->iteration }} . {{ $year->name }} <i
                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                            </a>
                        </h5>
                    </div>
                    <div id="{{ 'collapse'.$year->id }}" class="collapse @if ($loop->first) show @endif"
                        aria-labelledby="{{ 'heading'.$year->id }}"
                        data-parent="#custom-accordion-one">
                        <div class="card-body">
                            <div class="float-left">
                                <h4>Semesters</h4>
                            </div>

                            <div class="float-right">
                                <button type="button" class="btn btn-info" onclick="event.preventDefault();  $('#{{ 'add-'.$course->id.'-'.$year->id.'-semester' }}').modal('toggle');"><i class="mdi mdi-plus-circle mr-1"></i> Add Course Year Semester</button>
                            </div>

                            <div class="clearfix"></div>

                            <!-- Large modal -->
                            <div class="modal fade" id="{{ 'add-'.$course->id.'-'.$year->id.'-semester' }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">{{ $course->name }} <br> <span style="font-size:0.75em"> Add Semester to {{ $year->name }}</span></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('courses.years.semesters.store',['course'=>$course, 'year'=>$year]) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="course_semester_id">Semester</label>
                                                    <select class="form-control {{ $errors->has('course_semester_id') ? ' is-invalid' : '' }}" id="course_semester_id" name="course_semester_id" required>
                                                        @foreach ($semesters as $semester)
                                                            <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('course_semester_id'))
                                                        <span class="invalid-feedback" role="alert">
                                                            {{ $errors->first('course_semester_id') }}
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
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            @if (count($year->courseSemesters($course->id)) > 0)
                                {{-- @foreach ($year->courseSemesters($course->id) as $semester)
                                    <p>{{ $semester->name }}</p>
                                @endforeach --}}
                                <div class="row mt-3">
                                    <div class="col-sm-3 mb-2 mb-sm-0">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            @foreach ($year->courseSemesters($course->id) as $semester)
                                                <a class="nav-link @if ($loop->first) active show @endif" id="{{ 'v-pills-'.$semester->id.'-tab' }}" data-toggle="pill" href="#{{ 'v-pills-'.$semester->id }}" role="tab" aria-controls="{{ 'v-pills-'.$semester->id }}" aria-selected="@if ($loop->first) true @else false @endif">
                                                    <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                    <span class="d-none d-md-block">{{ $semester->name }}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div> <!-- end col-->
                                
                                    <div class="col-sm-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            @foreach ($year->courseSemesters($course->id) as $semester)
                                                <div class="tab-pane fade @if ($loop->first) active show @endif border border-primary p-2" id="{{ 'v-pills-'.$semester->id }}" role="tabpanel" aria-labelledby="{{ 'v-pills-'.$semester->id.'-tab' }}">

                                                    <div class="float-left">
                                                        <h4 style="text-decoration:underline">{{ Illuminate\Support\Str::title($semester->name) }} &nbsp; Units</h4>
                                                    </div>

                                                    <div class="float-right">
                                                        <button type="button" class="btn btn-info" onclick="event.preventDefault();  $('#{{ 'add-'.$course->id.'-'.$year->id.'-'.$semester->id.'-unit' }}').modal('toggle');"><i class="mdi mdi-plus-circle mr-1"></i> Add Course Year Semester Unit</button>

                                                        <a href="{{ route('courses.years.semesters.destroy',['course'=>$course, 'year'=>$year, 'semester'=>$semester]) }}" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-course-year-semester-form_{{ $semester->id }}').submit();"> <i class="mdi mdi-delete mr-1"></i>Remove Semester</a>
                                                        <form id="delete-course-year-semester-form_{{ $semester->id }}" action="{{ route('courses.years.semesters.destroy',['course'=>$course, 'year'=>$year, 'semester'=>$semester]) }}" method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="course" value="{{ $course->id }}">
                                                            <input type="hidden" name="year" value="{{ $year->id }}">
                                                            <input type="hidden" name="semester" value="{{ $semester->id }}">
                                                        </form>
                                                        
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <!-- Large modal -->
                                                    <div class="modal fade" id="{{ 'add-'.$course->id.'-'.$year->id.'-'.$semester->id.'-unit' }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myLargeModalLabel">{{ $course->name }} , {{ $year->name }}<br> <span style="font-size:0.75em"> Add Unit to {{ $semester->name }}</span></h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('courses.years.semester.units.store',['course'=>$course, 'year'=>$year, 'semester'=>$semester]) }}" method="POST">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="unit_id">Unit</label>
                                                                            <select class="form-control {{ $errors->has('unit_id') ? ' is-invalid' : '' }}" id="unit_id" name="unit_id" required>
                                                                                @foreach ($units as $unit)
                                                                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            @if ($errors->has('unit_id'))
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    {{ $errors->first('unit_id') }}
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
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->

                                                    @if (count($semester->semesterUnits($course->id, $year->id)) > 0)

                                                        <ul class="list-group">
                                                            @foreach ($semester->semesterUnits($course->id, $year->id) as $unit) 

                                                                <li class="list-group-item">{{ $loop->iteration}} . &nbsp; {{ $unit->name }}</li>                                                           
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        <p>No Units For This Semester</p>    
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end col-->
                                </div>
                                <!-- end row-->
                            @else
                                <p>No Course Semesters Defined Yet</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif    

    {{-- <div class="card">
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
    </div> <!-- end card --> --}}
    
@endsection