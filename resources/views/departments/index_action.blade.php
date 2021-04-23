<a href="{{ route('departments.edit',['department'=>$department]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Department"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('departments.destroy',['department'=>$department]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Department" onclick="event.preventDefault();document.getElementById('delete-department-form_{{ $department->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-department-form_{{ $department->id }}" action="{{ route('departments.destroy',['department'=>$department]) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
