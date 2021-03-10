<a href="{{ route('courses.edit', $course) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Edit Course"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('courses.show', $course) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Course"> <i class="mdi mdi-eye"></i></a>


<a href="{{ route('courses.destroy', $course) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Course" onclick="event.preventDefault();document.getElementById('delete-course-form_{{ $course->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
    <form id="delete-course-form_{{ $course->id }}" action="{{ route('courses.destroy', $course) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
