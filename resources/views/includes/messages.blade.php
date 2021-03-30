@if(session('success'))
    <div class="alert alert-success m-1">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger m-1">
        {{session('error')}}
    </div>
@endif