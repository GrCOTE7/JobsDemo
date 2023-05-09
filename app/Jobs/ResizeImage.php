<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\UploadedFile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Intervention\Image\ImageManager;

class ResizeImage implements ShouldQueue
{
	use Dispatchable;
	use InteractsWithQueue;
	use Queueable;
	use SerializesModels;

	private $uploadedFile;

	private $formats;

	/**
	 * Create a new job instance.
	 */
	public function __construct(UploadedFile $uploadedFile, array $formats)
	{
		$this->uploadedFile = $uploadedFile;
		$this->formats      = $formats;
	}

	/**
	 * Execute the job.
	 */
	public function handle(): void
	{
		$file = $this->uploadedFile->move(public_path('uploads'), $this->uploadedFile->getClientOriginalName());
		// foreach ($this->formats as $format) {
		// 	$manager = new ImageManager(['driver' => 'gd']);
		// 	$manager->make($this->file)
		// 		->fit($format, $format)
		// 		->rotate(215)
		// 		->save(public_path('uploads') . '/' . substr(pathinfo($this->file, PATHINFO_FILENAME), 0, -4) . "_{$format}x{$format}.jpg");
		// }
	}
}
