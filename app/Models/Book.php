<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
	use HasFactory;

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
