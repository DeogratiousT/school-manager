@if ($studentApplication->status == 'requested')
    <span class="badge badge-primary badge-pill">Requested</span>
@endif

@if ($studentApplication->status == 'approved')
    <span class="badge badge-success badge-pill">Approved</span>
@endif

@if ($studentApplication->status == 'rejected')
    <span class="badge badge-danger badge-pill">Rejected</span>
@endif