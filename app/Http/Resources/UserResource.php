<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @return array<string, mixed>
	 */
	public function toArray(Request $request): array
	{
		return [
			'id'          => $this->id,
			'name'        => $this->name,
			'created_at' => $this->created_at->format('d/M/Y'),
		];
	}
}
