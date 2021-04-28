@extends('layouts.app')

@section('head-imports')    
    <link href="{{ asset('css/creative/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/creative/responsive.bootstrap4.css') }}" rel="stylesheet" />
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Student Application</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('page-right')
    <a href="{{ route('students.create') }}" class="btn btn-info mb-2"><i class="mdi mdi-plus-circle mr-1"></i>Add Student Application</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-body"> 
            <table id="student-applications-laratable" class="table dt-responsive nowrap w-100">
                <thead class="thead-light">
                    <tr>
                        <th>Admission Number</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Course</th>
                        <th>National ID</th>
                        <th>County</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
@endsection

@push('scripts')
    <!-- JQUERY -->
    <script src="{{ asset('js/creative/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/creative/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/creative/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/creative/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable Init js -->
    <script src="{{ asset('js/creative/demo.datatable-init.js') }}"></script>

    <script>
        $(document).ready(function(){
            $("#student-applications-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('students.index') }}",                    
                columns: [
                    { name: 'admission_number' },
                    { name: 'first_name' },
                    { name: 'middle_name' },
                    { name: 'last_name' },
                    { name: 'course.name', orderable:false },
                    { name: 'national_id' },
                    { name: 'county.name', orderable:false },
                    { name: 'state' , orderable: false, searchable: false },
                    { name: 'action' , orderable: false, searchable: false }
                ],
            });
        });
    </script>
@endpush