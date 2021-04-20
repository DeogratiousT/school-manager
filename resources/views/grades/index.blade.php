@extends('layouts.app')

@section('head-imports')    
    <link href="{{ asset('css/creative/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/creative/responsive.bootstrap4.css') }}" rel="stylesheet" />
@endsection

@section('page-title','Intakes')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('intakes.index') }}">Intakes</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('content')
    <div class="float-right">
        <a href="{{ route('intakes.create') }}" class="btn btn-info mb-2"><i class="mdi mdi-plus-circle mr-1"></i>Add Intake</a>
    </div>

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body"> 
            <table id="grades-laratable" class="table dt-responsive nowrap w-100">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Academic Year</th>
                        <th>Created At</th>
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
            $("#grades-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('intakes.index') }}",
                columns: [
                    { name: 'name' },
                    { name: 'course.name', orderable:false },
                    { name: 'academicYear.name', orderable:false },
                    { name: 'created_at' },
                    { name: 'action' , orderable: false, searchable: false }
                ],
            });
        });
    </script>
@endpush