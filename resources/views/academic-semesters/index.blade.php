@extends('layouts.app')

@section('page-title','Academic Semesters')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('academic-semesters.index') }}">Academic Semesters</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('content')
    <div class="float-right">
        <a href="{{ route('academic-semesters.create') }}" class="btn btn-info mb-2"><i class="mdi mdi-plus-circle mr-1"></i>Add Academic Semester</a>
    </div>

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body"> 
            <table id="academic-semesters-laratable" class="table table-hover table-centered w-100 dt-responsive nowrap">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
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
            $("#academic-semesters-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('academic-semesters.index') }}",
                columns: [
                    { name: 'name' },
                    { name: 'created_at' },
                    { name: 'action' , orderable: false, searchable: false }
                ],
            });
        });
    </script>
@endpush