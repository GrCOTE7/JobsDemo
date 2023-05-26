@extends ('layouts.app')

@section('title', 'Test')

@section('content')
    <div class="container" id="app">
        <br><br>
        <h1 class="container text-blue-500 text-2xl font-bold mx-auto text-center">Liste des utilisateurs</h1>
        <user-select />
        <users-list />
    </div>
@endsection
