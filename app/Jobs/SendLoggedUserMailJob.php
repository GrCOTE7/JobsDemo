<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Jobs;

use App\Mail\WelcomeLoginUserMail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendLoggedUserMailJob implements ShouldQueue
{
	use Dispatchable;
	use InteractsWithQueue;
	use Queueable;
	use SerializesModels;

	public $user;

	/**
	 * Create a new job instance.
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Execute the job.
	 */
	public function handle(): void
	{
		sleep(7);
		// envoi d'un email de bienvenue à l'utilisateur
		Mail::to($this->user->email)->send(new WelcomeLoginUserMail($this->user->name));
	}
}
