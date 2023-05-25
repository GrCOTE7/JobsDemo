<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		// \App\Models\User::factory(10)->create();

		Book::factory(6)->create('');

		\App\Models\User::factory()->create([
			'name'     => 'Gc7',
			'email'    => 'gc7@test.com',
			'password' => Hash::make('0000'),
		]);
	}
}
