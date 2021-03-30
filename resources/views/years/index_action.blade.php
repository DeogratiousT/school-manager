<a href="{{ route('years.edit', $year) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Edit Tear"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('years.show', $year) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Year"> <i class="mdi mdi-eye"></i></a>


<a href="{{ route('years.destroy', $year) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Year" onclick="event.preventDefault();document.getElementById('delete-year-form_{{ $year->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-year-form_{{ $year->id }}" action="{{ route('years.destroy', $year) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
