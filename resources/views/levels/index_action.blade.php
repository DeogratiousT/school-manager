<a href="{{ route('levels.edit',['level'=>$level]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="View Level"> <i class="mdi mdi-square-edit-outline"></i></a>

<a href="{{ route('levels.destroy',['level'=>$level]) }}" class="action-icon" data-toggle="tooltip" data-placement="bottom" title="Delete Level" onclick="event.preventDefault();document.getElementById('delete-level-form_{{ $level->id }}').submit();"> <i class="mdi mdi-delete text-danger"></i></a>
<form id="delete-level-form_{{ $level->id }}" action="{{ route('levels.destroy',['level'=>$level]) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
