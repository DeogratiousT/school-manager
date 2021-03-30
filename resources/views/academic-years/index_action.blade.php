<a href="{{ route('academic-years.edit', $academicYear) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Edit Academic Year"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('academic-years.show', $academicYear) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Academic Year"> <i class="mdi mdi-eye"></i></a>


<a href="{{ route('academic-years.destroy', $academicYear) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Academic Year" onclick="event.preventDefault();document.getElementById('delete-academic-year-form_{{ $academicYear->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-academic-year-form_{{ $academicYear->id }}" action="{{ route('academic-years.destroy', $academicYear) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
