<a href="{{ route('academic-semesters.edit', $academicSemester) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Edit Academic Semester"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('academic-semesters.show', $academicSemester) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Academic Semester"> <i class="mdi mdi-eye"></i></a>


<a href="{{ route('academic-semesters.destroy', $academicSemester) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Academic Semester" onclick="event.preventDefault();document.getElementById('delete-academic-year-form_{{ $academicSemester->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-academic-year-form_{{ $academicSemester->id }}" action="{{ route('academic-semesters.destroy', $academicSemester) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
