<a href="{{ route('units.edit', $unit) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Edit Unit"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('units.index', $unit) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Unit"> <i class="mdi mdi-eye"></i></a>


<a href="{{ route('units.destroy', $unit) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Unit" onclick="event.preventDefault();document.getElementById('delete-unit-form_{{ $unit->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-unit-form_{{ $unit->id }}" action="{{ route('units.destroy', $unit) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
