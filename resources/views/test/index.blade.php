@extends ('layouts.app')

@section('title', 'Test')

@section('content')
    <div class="container" id="app">
        <h1 class="container text-blue-500 text-2xl font-bold mx-auto text-center">Liste des utilisateurs (Vue)</h1>
        <users-list-with-select />
    </div>
@endsection
