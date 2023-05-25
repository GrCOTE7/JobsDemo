<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
	/**
	 * Handle the incoming request.
	 */
	public function __invoke(Request $request)
	{
		$validated = $request->validate([
			'name'     => 'required|string',
			'email'    => 'required|email|unique:users',
			'password' => 'required|confirmed',
		]);

		$validated['password'] = Hash::make($validated['password']);

		$user = User::create($validated);

		return response()->json([
			'success' => true,
			'user'    => $user,
		]);
	}
}
