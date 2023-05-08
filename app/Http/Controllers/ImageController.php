<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers;

use App\Http\Requests\ImageFormRequest;
use App\Http\Tools\Gc7;
use Intervention\Image\ImageManager;

class ImageController extends Controller
{
	public function create()
	{
		return view('image.create');
	}

	public function store(ImageFormRequest $request)
	{
		$uploadedFile = $request->file('file');

		// dd($uploadedFile);
		// dd(public_path('uploads'));
		// dd($uploadedFile->getClientOriginalName());
		$file = $uploadedFile->move(public_path('uploads'), $uploadedFile->getClientOriginalName());

		// dd($file);
		$formats = [150, 300, 500, 1000, 1200, 1400, 1500];
		// dd($formats);

		// $format  = 1000;
		// $manager = new ImageManager(['driver' => 'gd']);
		// dd($manager);

		foreach ($formats as $format) {
			$manager = new ImageManager(['driver' => 'gd']);
			$manager->make($file->getRealPath())
				->fit($format, $format)
				->rotate(45)
				->save(public_path('uploads') . '/' . substr($file->getBasename(), 0, -4) . "_{$format}x{$format}.jpg");
		}

		// dd($file->getRealPath());

		// $newName = substr($file->getBasename(), -4);

		// Gc7::aff($newName);

		// dd("/{strstr({$file->getBasename}(),-4)}_{$format}x{$format}.jpg");

		return to_route('image.create')->with(
			'success',
			'The image was saved in differents formats'
		);
	}
}
