<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Observers;

use App\Mail\PasswordChangedMail;
use Illuminate\Support\Facades\Mail;

class PasswordChangeObserver
{
	public function updated($model)
	{
		if ($model->wasChanged('password')) {
            Mail::to($model->email)->send(new PasswordChangedMail());
		}
	}
}
