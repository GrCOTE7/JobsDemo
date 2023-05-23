@extends('base')

@section('title', 'Add Books')

@section('content')

    <div class="container vstack gap-2 mt-3">
        <h1>Enregistrement d'un livre</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div class="group-form">
        <label for="title">Titre</label>
        <input class="form-control" type="text" name="title" placeholder="Saisissez ici le titre">
    </div>
    <button class="btn btn-primary mt-3" type="submit">Enregistrer</button>
</form>

    </div>
@endsection
