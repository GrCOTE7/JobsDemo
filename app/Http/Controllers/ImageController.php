<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class ImageController extends Controller
{
	public function create()
	{
		return view('image.create');
	}

	public function store(Request $request)
	{
		$uploadedFile = $request->file('file');

		// dd($uploadedFile);
		// dd(public_path('uploads'));
		// dd($uploadedFile->getClientOriginalName());
		$file = $uploadedFile->move(public_path('uploads'), $uploadedFile->getClientOriginalName());

		// dd($file);
		$formats = [150, 500, 1000, 1200, 1400];
		// dd($formats);

		foreach ($formats as $format) {
			$manager = new ImageManager(['driver' => 'gd']);
			$manager->make($file->getRealPath())
				->fit($format, $format)
				->rotate(45)
				->save("/{$file->getBasename()}_{$format}x{$format}.jpg");
		}

		return to_route('image.create')->with(
			'success',
			'The image was saved in differents formats'
		);
	}
}
