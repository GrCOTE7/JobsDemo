@extends('base')

@section('title', 'Books')

@section('content')

    {{-- @dump({{ $session }}) --}}

    <div class="container vstack gap-2 mt-3">
        <h1>Edition du livre n°{{  $book->id }}</h1>

<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="group-form">
        <label for="title">Titre</label>
        <input class="form-control" type="text" name="title" value="{{ $book->title }}">
    </div>
    <button class="btn btn-primary mt-3">Soumettre</button>
</form>

    </div>
@endsection
