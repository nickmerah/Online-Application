<?php

namespace App\Http\Controllers;

use App\Events\AppLoginUpdate;
use App\Events\ApplicantUpdatedEvent;
use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicantRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;


class ApplicantsController extends Controller
{


    public function index()
    {
      $applicant = Applicant::all();
     event(new ApplicantUpdatedEvent);
      return $applicant;
    }


    public function show(Applicant $applicant)
    {
       return $applicant;
    }


    public function update(ApplicantRequest $request, Applicant $applicant)
    {

      try {

      \DB::beginTransaction();

      $applicant->update($request->only('surname','firstname','othernames','gender','marital_status',
      'birthdate','local_gov','state_of_origin','contact_address','student_email',
      'student_homeaddress','student_mobiletel','next_of_kin','nok_address','nok_email',
      'nok_tel','stdprogramme_id','stdcourse','std_programmetype'));

       event(new AppLoginUpdate($applicant)); //this update applicant login table

       \DB::commit();
      event(new ApplicantUpdatedEvent);

      return response($applicant, Response::HTTP_ACCEPTED);

       } catch (\Throwable $e) {
           \DB::rollBack();

           return response([
               'error' => $e->getMessage()
           ], 400);
       }
    }

    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        event(new ApplicantUpdatedEvent);

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function completedapplication(Request $request)
    {
         return Applicant::applicants()->get(); //gets all completed applications

      }

      public function allapplicants_paginated(Request $request)
      {
           $page = $request->input('page', 1);

           //redis cache
           $applicants = \Cache::remember('all_applicants', 30 * 60, fn() => Applicant::all());

           //search applicants
           if ($s = $request->input('s')) {
            $applicants = $applicants
                ->filter(
                    fn(Applicant $applicant) => Str::contains($applicant->app_no, $s) || Str::contains($applicant->surname, $s)
                );
        }
            $total = $applicants->count();
          // return Applicant::paginate();
           return [
           'data' => $applicants->forPage($page, 2)->values(),
           'meta' => [
               'total' => $total,
               'page' => $page,
               'last_page' => ceil($total / 2)
           ]
       ];

        }


}
