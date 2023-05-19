<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
use App\Models\Book;

class BookController extends Controller
{
	public function index()
	{
		$books = Book::all();
        // $books=[];

		// dump($books);
		// Gc7::aff($books);

		return view('books.index', [
			'books' => $books,
		]);
	}
}
