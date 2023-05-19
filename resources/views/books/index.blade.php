@extends('base')

@section('title', 'Books')

@section('content')

    {{-- @dump({{ $session }}) --}}

    <div class="container vstack gap-2 mt-3">
        <h1>Liste des livres</h1>

        @php
            // use App\Models\Book;
            // use App\Http\Tools\Gc7;
            // $books = Book::pluck('title', 'id');
            // Gc7::aff($books);
        @endphp

        @forelse ($books as $book)
            {{ $book->title }} de {{ $book->user->name }}<br>
        @empty
            No books
        @endforelse

    </div>
@endsection
