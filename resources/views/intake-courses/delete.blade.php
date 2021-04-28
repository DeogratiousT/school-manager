@extends('layouts.app')

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('intakes.index') }}">Intakes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('intakes.show',$intake) }}">{{ $intake->name }}</a></li>
        <li class="breadcrumb-item active">All</li>
    </ol>
@endsection

@section('content')

    <div class="row">        
        <div class="col-lg-12 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <p>Intake Details</p><hr>
                    <div class="list-group">
                        <span><b>Intake Name</b> : {{$intake->name}}</span><br>
                    </div>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <p>Enter Intake alias given below to Delete</p><hr>
                    
                    <form action="{{ route('intakes.destroy', $intake) }}" method="POST">
                        @csrf
                        @method('DELETE')

                            <div class="form-group">
                                <label for="name"><b>{{ $intake->slug }}</b></label>
                                <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="{{ $intake->slug }}" required>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-2 text-center">
                                <button class="btn btn-danger btn-block" type="submit">
                                    <i class="mdi mdi-content-save"></i> Delete Intake
                                </button>
                            </div>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>

@endsection