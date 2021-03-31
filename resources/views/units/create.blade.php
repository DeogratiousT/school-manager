@extends('layouts.app')

@section('page-title','Units')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('units.index') }}">Units</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('units.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Unit Name</label>
                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter the Unit Name" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="hours">Unit Hours</label>
                <input class="form-control {{ $errors->has('hours') ? ' is-invalid' : '' }}" type="text" id="hours" name="hours" value="{{ old('hours') }}" placeholder="Enter the Unit Hours" required>
                @if ($errors->has('hours'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('hours') }}
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