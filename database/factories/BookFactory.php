<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'title'   => substr(fake()->sentence(3), 0, -1),
			'user_id' => User::factory(),
		];
	}
}
