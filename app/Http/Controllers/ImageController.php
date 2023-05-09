<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers;

use App\Http\Requests\ImageFormRequest;
use App\Http\Tools\Gc7;
use App\Jobs\ResizeImage;
use Illuminate\Contracts\Queue\ShouldQueue;

class ImageController extends Controller implements ShouldQueue
{
	public $result;

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

		// dd($file);
		$formats = [150, 300, 500, 1000, 1200, 1400, 1500];
		// dd($formats);

		// $format  = 1000;
		// $manager = new ImageManager(['driver' => 'gd']);
		// dd($manager);

		// dd($file->getRealPath());

		// $newName = substr($file->getBasename(), -4);

		// Gc7::aff($newName);

		// dd("/{strstr({$file->getBasename}(),-4)}_{$format}x{$format}.jpg");

		// sleep(7);

		// $this->dispatch(new ResizeImage($uploadedFile, $formats));
		$this->result = new ResizeImage($uploadedFile, $formats);

		return to_route('image.create')->with(
			'success',
			'The image was saved in different formats'
		);

		// return redirect()->route('image.create')->with(
		// 	'success',
		// 	'The image was saved in different formats'
		// );
	}
}
