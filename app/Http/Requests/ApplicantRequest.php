<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
      return [
         'surname' => 'required',
         'firstname' => 'required',
         'othernames' => 'required',
         'gender' => 'required',
         'marital_status' => 'required',
         'birthdate' => 'required',
         'local_gov' => 'required',
         'state_of_origin' => 'required',
         'contact_address' => 'required',
         'student_email' => 'required|email',
         'student_homeaddress' => 'required',
         'student_mobiletel' => 'required',
         'next_of_kin' => 'required',
         'nok_address' => 'required',
         'nok_email' => 'required|email',
         'nok_tel' => 'required',
         'stdprogramme_id' => 'required|numeric',
         'stdcourse' => 'required|numeric',
         'std_programmetype' => 'required|numeric',
     ];
    }
}
