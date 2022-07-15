<?php

namespace App\Listeners;

use App\Events\AppLoginUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class UpdateApplicantLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function handle(AppLoginUpdate $event)
    {

        $applicantinfo = $event->applicant;

         return   DB::table('applogin')->update(
           ['log_surname' => $applicantinfo->surname, 'log_firstname' => $applicantinfo->firstname,
           'log_othernames' => $applicantinfo->othernames, 'cos' => $applicantinfo->stdprogramme_id,
            'log_email' => $applicantinfo->student_email,        'log_gsm' => $applicantinfo->student_mobiletel],
             ['log_id' => $applicantinfo->std_logid],
        );
           
    }
}
