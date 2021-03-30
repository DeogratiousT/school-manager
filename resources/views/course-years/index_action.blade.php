<a href="{{ route('course-semester.edit', $courseSemester) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Edit Course Semester"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('course-semester.show', $courseSemester) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Course Semester"> <i class="mdi mdi-eye"></i></a>


<a href="{{ route('course-semester.destroy', $courseSemester) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Course Semester" onclick="event.preventDefault();document.getElementById('delete-course-form_{{ $courseSemester->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-course-form_{{ $courseSemester->id }}" action="{{ route('course-semester.destroy', $courseSemester) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
