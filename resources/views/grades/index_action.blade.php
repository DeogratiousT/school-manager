<a href="{{ route('intakes.show',['intake'=>$grade]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Edit Tear"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('intakes.edit',['intake'=>$grade]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Intake"> <i class="mdi mdi-eye"></i></a>


<a href="{{ route('intakes.destroy',['intake'=>$grade]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Intake" onclick="event.preventDefault();document.getElementById('delete-grade-form_{{ $grade->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-grade-form_{{ $grade->id }}" action="{{ route('intakes.destroy',['intake'=>$grade]) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
