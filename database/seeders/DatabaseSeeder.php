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

		\App\Models\User::factory()->create([
			'name'     => 'Test User',
			'email'    => 'test@example.com',
			'password' => Hash::make('0000'),
		]);

        Book::factory(10)->create('');
	}
}
