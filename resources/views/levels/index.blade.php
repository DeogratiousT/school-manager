@extends('layouts.app')

@section('head-imports')    
    <link href="{{ asset('css/creative/dataTables.bootstrap4.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/creative/responsive.bootstrap4.css') }}" rel="stylesheet" />
@endsection

@section('page-title','Levels')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('levels.index') }}">Levels</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('content')
    <div class="float-right">
        <a href="{{ route('levels.create') }}" class="btn btn-info mb-2"><i class="mdi mdi-plus-circle mr-1"></i>Add Level</a>
    </div>

    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body"> 
            <table id="levels-laratable" class="table dt-responsive nowrap w-100">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Alias</th>
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
            $("#levels-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('levels.index') }}",
                columns: [
                    { name: 'name' },
                    { name: 'alias' },
                    { name: 'action' , orderable: false, searchable: false }
                ],
            });
        });
    </script>
@endpush