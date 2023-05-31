<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
	/**
	 * Handle the incoming request.
	 */
	public function __invoke(User $user): UserResource
	{
		return UserResource::make($user);
	}
}
