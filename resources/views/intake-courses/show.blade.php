@extends('layouts.app')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('intakes.index') }}">Intakes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('intakes.courses.index',$intake) }}">{{ $intake->name }}</a></li>
        <li class="breadcrumb-item active">{{ $course->name }}</li>
    </ol>
@endsection

@section('page-right')
    <a href="{{ route('intakes.destroy', $intake) }}" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-intake-form_{{ $intake->id }}').submit();">Delete Intake</a>
    <form id="delete-intake-form_{{ $intake->id }}" action="{{ route('intakes.destroy', $intake) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection
    
@section('content')
    <h4>{{ $intake->name }}</h4>    
    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
        <li class="nav-item">
            <a href="#new" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                <span class="d-none d-md-block"><span class="badge badge-info p-1">{{ count($newApplications) }}</span> New</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#approved" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                <span class="d-none d-md-block"><span class="badge badge-info p-1">{{ count($approvedApplications) }}</span> Approved</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#rejected" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                <span class="d-none d-md-block"><span class="badge badge-info p-1">{{ count($rejectedApplications) }}</span> Rejected</span>
            </a>
        </li>
    </ul>
    
    <div class="tab-content">
        <!-- Start New Applications Table -->
        <div class="tab-pane show active" id="new">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($newApplications) > 0)
                        @foreach ($newApplications as $newApplication)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $newApplication->fullname() }}</td>
                                <td>{{ $newApplication->serial }}</td>
                                <td>
                                    <button  type="button" class="action-icon" style="background-color:transparent; border:none" data-toggle="modal" data-target="#more-details-modal"><i class="mdi mdi-eye" data-toggle="tooltip" data-placement="bottom" title="View More Details"></i></button>

                                    @if ($newApplication->status == 'requested' || $newApplication->status == 'rejected')
                                        <a href="{{ route('students.destroy', $newApplication) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Approve Application" onclick="event.preventDefault();document.getElementById('approve-application-form_{{ $newApplication->id }}').submit();"> <i class="mdi mdi-account-check text-success"></i></a>
                                        <form id="approve-application-form_{{ $newApplication->id }}" action="{{ route('students.destroy', $newApplication) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="status" value="approved">
                                            <input type="hidden" name="course" value="{{ $course->slug }}">
                                            <input type="hidden" name="intake" value="{{ $intake->slug }}">
                                        </form>
                                    @endif

                                    @if ($newApplication->status == 'requested' || $newApplication->status == 'approved')
                                        <a href="{{ route('students.destroy', $newApplication) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Reject Application" onclick="event.preventDefault();document.getElementById('reject-application-form_{{ $newApplication->id }}').submit();"> <i class="mdi mdi-account-remove text-danger"></i></a>
                                        <form id="reject-application-form_{{ $newApplication->id }}" action="{{ route('students.destroy', $newApplication) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="status" value="rejected">
                                            <input type="hidden" name="course" value="{{ $course->slug }}">
                                            <input type="hidden" name="intake" value="{{ $intake->slug }}">
                                        </form>
                                    @endif
                                </td>
                            </tr>

                            <!-- More Details modal -->
                            <div class="modal fade" id="more-details-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-full-width" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="scrollableModalTitle">More Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>Profile</h4>
                                                    <p>Name: {{ $newApplication->fullname() }}</p>
                                                    <p>Serial: {{ $newApplication->serial }}</p>
                                                    <p>National ID: {{ $newApplication->national_id }}</p>
                                                    <p>county: {{ $newApplication->county->name }}</p>
                                                    <p>Status: {{ $newApplication->status }}</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>Uploads</h4>
                                                    @if (count($newApplication->media) > 0)
                                                        <div class="row">
                                                            @foreach ($newApplication->media as $media)
                                                                <div class="col-sm-12 col-md-6 col-lg-4">
                                                                    <embed src="{{ asset('storage/uploads/'.$newApplication->course->id.'/'.$media->name) }}" class="img-fluid" width="175" height="175" style="height:175px;"/>
                                                                    <a href="{{ asset('storage/uploads/'.$newApplication->course->id.'/'.$media->name) }}" class="btn btn-link text-success" target="_blank">Preview</a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @else
                                                        <p class="text-warning">No media Uploaded</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-warning">No New Applications</td>
                        </tr>    
                    @endif
                </tbody>
            </table>
        </div>
        <!-- End New Applications Table -->

        <!-- Start Approved Applications Table -->
        <div class="tab-pane" id="approved">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($approvedApplications) > 0)
                        @foreach ($approvedApplications as $approvedApplication)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $approvedApplication->fullname() }}</td>
                                <td>{{ $approvedApplication->serial }}</td>
                                <td>
                                    <button  type="button" class="action-icon" style="background-color:transparent; border:none" data-toggle="modal" data-target="#more-details-modal"><i class="mdi mdi-eye" data-toggle="tooltip" data-placement="bottom" title="View More Details"></i></button>

                                    @if ($approvedApplication->status == 'requested' || $approvedApplication->status == 'rejected')
                                        <a href="{{ route('students.destroy', $approvedApplication) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Approve Application" onclick="event.preventDefault();document.getElementById('approve-application-form_{{ $approvedApplication->id }}').submit();"> <i class="mdi mdi-account-check text-success"></i></a>
                                        <form id="approve-application-form_{{ $approvedApplication->id }}" action="{{ route('students.destroy', $approvedApplication) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="status" value="approved">
                                            <input type="hidden" name="course" value="{{ $course->slug }}">
                                            <input type="hidden" name="intake" value="{{ $intake->slug }}">
                                        </form>
                                    @endif

                                    @if ($approvedApplication->status == 'requested' || $approvedApplication->status == 'approved')
                                        <a href="{{ route('students.destroy', $approvedApplication) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Reject Application" onclick="event.preventDefault();document.getElementById('reject-application-form_{{ $approvedApplication->id }}').submit();"> <i class="mdi mdi-account-remove text-danger"></i></a>
                                        <form id="reject-application-form_{{ $approvedApplication->id }}" action="{{ route('students.destroy', $approvedApplication) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="status" value="rejected">
                                            <input type="hidden" name="course" value="{{ $course->slug }}">
                                            <input type="hidden" name="intake" value="{{ $intake->slug }}">
                                        </form>
                                    @endif
                                </td>
                            </tr>

                            <!-- More Details modal -->
                            <div class="modal fade" id="more-details-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-full-width" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="scrollableModalTitle">More Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>Profile</h4>
                                                    <p>Name: {{ $approvedApplication->fullname() }}</p>
                                                    <p>Serial: {{ $approvedApplication->serial }}</p>
                                                    <p>National ID: {{ $approvedApplication->national_id }}</p>
                                                    <p>county: {{ $approvedApplication->county->name }}</p>
                                                    <p>Status: {{ $approvedApplication->status }}</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>Uploads</h4>
                                                    @if (count($approvedApplication->media) > 0)
                                                        <div class="row">
                                                            @foreach ($approvedApplication->media as $media)
                                                                <div class="col-sm-12 col-md-6 col-lg-4">
                                                                    <embed src="{{ asset('storage/uploads/'.$approvedApplication->course->id.'/'.$media->name) }}" class="img-fluid" width="175" height="175" style="height:175px;"/>
                                                                    <a href="{{ asset('storage/uploads/'.$approvedApplication->course->id.'/'.$media->name) }}" class="btn btn-link text-success" target="_blank">Preview</a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @else
                                                        <p class="text-warning">No media Uploaded</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-warning">No Approved Student Applications</td>
                        </tr>    
                    @endif
                </tbody>
            </table>
        </div>
        <!-- End Approved Applications Table -->

        <!-- Start Rejected Applications Table -->
        <div class="tab-pane" id="rejected">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($rejectedApplications) > 0)
                        @foreach ($rejectedApplications as $rejectedApplication)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $rejectedApplication->fullname() }}</td>
                                <td>{{ $rejectedApplication->serial }}</td>
                                <td>
                                    <button  type="button" class="action-icon" style="background-color:transparent; border:none" data-toggle="modal" data-target="#more-details-modal"><i class="mdi mdi-eye" data-toggle="tooltip" data-placement="bottom" title="View More Details"></i></button>

                                    @if ($rejectedApplication->status == 'requested' || $rejectedApplication->status == 'rejected')
                                        <a href="{{ route('students.destroy', $rejectedApplication) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Approve Application" onclick="event.preventDefault();document.getElementById('approve-application-form_{{ $rejectedApplication->id }}').submit();"> <i class="mdi mdi-account-check text-success"></i></a>
                                        <form id="approve-application-form_{{ $rejectedApplication->id }}" action="{{ route('students.destroy', $rejectedApplication) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="status" value="approved">
                                            <input type="hidden" name="course" value="{{ $course->slug }}">
                                            <input type="hidden" name="intake" value="{{ $intake->slug }}">
                                        </form>
                                    @endif

                                    @if ($rejectedApplication->status == 'requested' || $rejectedApplication->status == 'approved')
                                        <a href="{{ route('students.destroy', $rejectedApplication) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Reject Application" onclick="event.preventDefault();document.getElementById('reject-application-form_{{ $rejectedApplication->id }}').submit();"> <i class="mdi mdi-account-remove text-danger"></i></a>
                                        <form id="reject-application-form_{{ $rejectedApplication->id }}" action="{{ route('students.destroy', $rejectedApplication) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="status" value="rejected">
                                            <input type="hidden" name="course" value="{{ $course->slug }}">
                                            <input type="hidden" name="intake" value="{{ $intake->slug }}">
                                        </form>
                                    @endif
                                </td>
                            </tr>

                            <!-- More Details modal -->
                            <div class="modal fade" id="more-details-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-full-width" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="scrollableModalTitle">More Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4>Profile</h4>
                                                    <p>Name: {{ $rejectedApplication->fullname() }}</p>
                                                    <p>Serial: {{ $rejectedApplication->serial }}</p>
                                                    <p>National ID: {{ $rejectedApplication->national_id }}</p>
                                                    <p>county: {{ $rejectedApplication->county->name }}</p>
                                                    <p>Status: {{ $rejectedApplication->status }}</p>
                                                </div>
                                                <div class="col-md-8">
                                                    <h4>Uploads</h4>
                                                    @if (count($rejectedApplication->media) > 0)
                                                        <div class="row">
                                                            @foreach ($rejectedApplication->media as $media)
                                                                <div class="col-sm-12 col-md-6 col-lg-4">
                                                                    <embed src="{{ asset('storage/uploads/'.$rejectedApplication->course->id.'/'.$media->name) }}" class="img-fluid" width="175" height="175" style="height:175px;"/>
                                                                    <a href="{{ asset('storage/uploads/'.$rejectedApplication->course->id.'/'.$media->name) }}" class="btn btn-link text-success" target="_blank">Preview</a>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @else
                                                        <p class="text-warning">No media Uploaded</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-warning">No Rejected Applications</td>
                        </tr>    
                    @endif
                </tbody>
            </table>
        </div>
        <!-- End Rejected Applications Table -->
    </div>
@endsection