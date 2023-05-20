@extends('base')

@section('title', 'Books')

@section('content')

    {{-- @dump({{ $session }}) --}}

    <div class="container vstack gap-2 mt-2">
        <div class="d-flex flex-row align-items-center justify-content-between">
            <h1>Liste des livres</h1>
            <button class="btn btn-primary text-9xl"><a href="{{ route('books.create') }}"
                    style="color:white; font-size: 20px;" class="no-underline">+</a></button>
        </div>
        <div class="container">
            @forelse ($books as $book)
                <div class="d-flex align-items-center justify-content-between" style="margin-bottom: 5px;">
                    <span class="justify-content-start">{{ $book->id }} : <strong><a
                                href="{{ route('books.edit', $book) }}"
                                class="text-primary no-underline">{{ ucwords($book->title) }}</a></strong> de
                        <b>{{ $book->user->name }}</b></span>

                    <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST"
                        onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?')" class="ml-5">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z">
                                </path>
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
            @empty
                <p>No books</p>
            @endforelse
        </div>
    </div>
@endsection
