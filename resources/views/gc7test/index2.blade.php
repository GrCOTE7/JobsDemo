@extends ('layouts.app')

@section('title', 'Test2')

@section('content')
    <div class="container" id="app">
        <p class="h1 d-flex align-items-center justify-content-between">
            <span class="text-blue-500 text-2xl font-bold">Liste des utilisateurs (Vue)</span>

            <button class="btn btn-primary text-xl"><a href="{{ route('users.create') }}" style="color:white; font-size: 20px;" class="no-underline">+</a>
            </button>
        </p>

        <users-list />
    </div>
@endsection
