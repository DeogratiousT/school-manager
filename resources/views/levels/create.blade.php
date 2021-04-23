@extends('layouts.app')

@section('page-title','Levels')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('levels.create') }}">Levels</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('levels.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Level Name</label>
                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter the Level Name" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="alias">Level Alias</label>
                <input class="form-control {{ $errors->has('alias') ? ' is-invalid' : '' }}" type="text" id="alias" name="alias" value="{{ old('alias') }}" placeholder="Enter the Level Alias" required>
                @if ($errors->has('alias'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('alias') }}
                    </span>
                @endif
            </div>
            
            <div class="form-group mb-2 text-center">
                <button class="btn btn-primary btn-block" type="submit">
                    <i class="mdi mdi-content-save"></i> Submit
                </button>
            </div>
        </form>
    </div>

@endsection 