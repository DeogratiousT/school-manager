@if ($studentApplication->status == 'requested' || $studentApplication->status == 'rejected')
    <a href="{{ route('students.destroy', $studentApplication) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Approve Application" onclick="event.preventDefault();document.getElementById('approve-application-form_{{ $studentApplication->id }}').submit();"> <i class="mdi mdi-account-check text-success"></i></a>
    <form id="approve-application-form_{{ $studentApplication->id }}" action="{{ route('students.destroy', $studentApplication) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
        <input type="hidden" name="status" value="approved">
    </form>
@endif

@if ($studentApplication->status == 'requested' || $studentApplication->status == 'approved')
    <a href="{{ route('students.destroy', $studentApplication) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Reject Application" onclick="event.preventDefault();document.getElementById('reject-application-form_{{ $studentApplication->id }}').submit();"> <i class="mdi mdi-account-remove text-danger"></i></a>
    <form id="reject-application-form_{{ $studentApplication->id }}" action="{{ route('students.destroy', $studentApplication) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
        <input type="hidden" name="status" value="rejected">
    </form>
@endif
