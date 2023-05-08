@if(session('success'))
<div class="container mt-3 alert alert-success">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="container mt-3 alert alert-danger">
    <ul class="my-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
