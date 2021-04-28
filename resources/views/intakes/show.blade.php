@extends('layouts.app')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('intakes.index') }}">intakes</a></li>
        <li class="breadcrumb-item active">{{ $intake->name }}</li>
    </ol>
@endsection

@section('page-right')
    <a href="{{ route('intakes.destroy', $intake) }}" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('delete-intake-form_{{ $intake->id }}').submit();">Delete Intake</a>
    <form id="delete-intake-form_{{ $intake->id }}" action="{{ route('intakes.destroy', $intake) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection
    
@section('content')
    <h4>{{ $intake->name }}</h4>    
@endsection