@extends('base')

@section('title', 'Users')

@section('content')
    <div class="container">
        <div id="app">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Liste des utilisateurs (Composant Vue)</h2>

                <button class="btn btn-primary text-9xl"><a href="{{ route('users.create') }}" style="color:white; font-size: 20px;" class="no-underline">+</a>
                </button>
            </div>
            <users-list />
        </div>
    </div>
@endsection
