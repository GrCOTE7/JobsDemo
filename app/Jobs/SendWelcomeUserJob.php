<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Jobs;

use App\Models\User;
use App\Mail\WelcomeUserMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendWelcomeUserJob implements ShouldQueue
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
        // envoi d'un user de bienvenue à l'utilisateur
		Mail::to($this->user->email)->send(new WelcomeUserMail($this->user->name));
	}
}
