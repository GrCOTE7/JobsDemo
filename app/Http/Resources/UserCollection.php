<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
	public $collects = UserResource::class;

	/**
	 * Transform the resource collection into an array.
	 *
	 * @return array<string, Collection>
	 */
	public function toArray(Request $request): array
	{
		return [
			'data' => $this->collection,
		];
	}
}
