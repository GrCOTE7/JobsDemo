<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$books = Book::all();

		return view('books.index', [
			'books' => $books,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('books.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		// dd($request->all);
		$user = User::factory()->create();
		Book::create([
			'title'   => $request->title,
			'user_id' => $user->id,
		]);

		return redirect()->route('books.index');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Book $book)
	{
		return view('books.edit', ['book' => $book]);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Book $book)
	{
		// dd($request);
		// $book
		$book->update([
			'title' => $request->title,
		]);

		return redirect()->route('books.index', ['book' => $book])->with('success', 'Le livre ' . $book->id . ' a été modifié avec succès.');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Book $book)
	{
		$book->delete();

		return redirect()->route('books.index')->with('success', 'Le livre ' . $book->id . ' a été supprimé avec succès.');
	}
}
