<a href="{{ route('intakes.edit',['intake'=>$intake]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Edit Tear"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('intakes.courses.index',['intake'=>$intake]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Intake Courses"> <i class="mdi mdi-eye"></i></a>


<a href="{{ route('intakes.destroy',['intake'=>$intake]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Intake" onclick="event.preventDefault();document.getElementById('delete-intake-form_{{ $intake->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-intake-form_{{ $intake->id }}" action="{{ route('intakes.destroy',['intake'=>$intake]) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
