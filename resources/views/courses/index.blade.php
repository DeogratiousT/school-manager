@extends('layouts.app')

@section('page-title','Courses')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('content')
    <div class="float-right">
        <a href="{{ route('courses.create') }}" class="btn btn-info mb-2"><i class="mdi mdi-plus-circle mr-1"></i>Add Course</a>
    </div>

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body"> 
            <table id="courses-laratable" class="table table-hover table-centered w-100 dt-responsive nowrap">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Alias</th>
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
    <script src="{{ asset('js/creative/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/creative/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/creative/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $("#courses-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('courses.index') }}",
                columns: [
                    { name: 'name' },
                    { name: 'alias' },
                    { name: 'created_at' },
                    { name: 'action' , orderable: false, searchable: false }
                ],
            });
        });
    </script>
@endpush