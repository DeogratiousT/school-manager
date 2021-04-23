@extends('layouts.app')

@section('page-title','Student Applications')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Student Application</a></li>
        <li class="breadcrumb-item active">{{ $studentApplication->fullname() }}</li>
    </ol>
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="float-right">
                <a href="{{ route('students.media.create',$studentApplication) }}" class="btn btn-info mb-2"><i class="mdi mdi-folder-open mr-1"></i>View Uploads</a>

                @if ($studentApplication->status == 'requested' || $studentApplication->status == 'rejected')
                    <a href="{{ route('students.destroy', $studentApplication) }}" class="btn btn-success mb-2" onclick="event.preventDefault();document.getElementById('approve-application-form_{{ $studentApplication->id }}').submit();"> <i class="mdi mdi-account-check mr-1"></i>Approve Application</a>
                    <form id="approve-application-form_{{ $studentApplication->id }}" action="{{ route('students.destroy', $studentApplication) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="status" value="approved">
                    </form>
                @endif

                @if ($studentApplication->status == 'requested' || $studentApplication->status == 'approved')
                    <a href="{{ route('students.destroy', $studentApplication) }}" class="btn btn-danger mb-2" onclick="event.preventDefault();document.getElementById('reject-application-form_{{ $studentApplication->id }}').submit();"> <i class="mdi mdi-account-remove mr-1"></i>Reject Application</a>
                    <form id="reject-application-form_{{ $studentApplication->id }}" action="{{ route('students.destroy', $studentApplication) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="status" value="rejected">
                    </form>
                @endif

                <a href="{{ route('students.destroy', $studentApplication) }}" class="btn btn-danger mb-2" onclick="event.preventDefault();document.getElementById('delete-student-application-form_{{ $studentApplication->id }}').submit();"> <i class="mdi mdi-delete mr-1"></i> Delete Application</a>
                <form id="delete-student-application-form_{{ $studentApplication->id }}" action="{{ route('students.destroy', $studentApplication) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>            

            <div class="clearfix"></div>

            <ul class="list-group col-6">
                <li class="list-group-item"><i class="mdi mdi-account mr-1"></i> {{ $studentApplication->fullname() }}</li>
                <li class="list-group-item"><i class="mdi mdi-folder mr-1"></i> {{ $studentApplication->course->name }}</li>
                <li class="list-group-item"><i class="mdi mdi-map-marker mr-1"></i> {{ $studentApplication->county->name }}</li>
            </ul>
            
        </div>
    </div>
@endsection