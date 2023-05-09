<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers;

use App\Http\Tools\Gc7;

class TestController extends Controller
{
	public function test()
	{
		$this->Gc7Test();

		return view('image.create');
	}

	private function Gc7Test()
	{
		$name0 = 'djkfghjsdghjsd.jpg';

		$newName = "substr({$name0}, 0, -4)";

		Gc7::aff($newName);
	}
}
