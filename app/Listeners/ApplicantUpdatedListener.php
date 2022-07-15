<?php

namespace App\Listeners;

use App\Events\ApplicantUpdatedEvent;

class ApplicantUpdatedListener
{

    public function handle(ApplicantUpdatedEvent $event)
    {
       \Cache::forget('all_applicants');
    }
}
