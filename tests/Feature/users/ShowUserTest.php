<?php

declare(strict_types=1);

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

use App\Models\User;

use function Pest\Laravel\get;

it('can show an user', function () {
	$user = User::factory()->create();

	get(route('api.users.show', $user))
		->assertOk();
})->only();

it('can not show an user', function () {
	get(route('api.users.show', 1))
		->assertNotFound();
})->only();
