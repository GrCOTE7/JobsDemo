<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class IndexController extends Controller
{
	/**
	 * Handle the incoming request.
	 */
	public function __invoke(Request $request)
	{
		return new ResourceCollection(
			resource: User::latest()->paginate(10)
		);
	}
}
