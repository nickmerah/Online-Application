<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDepartmentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
      return [
         'departments_name' => 'required',
         'fac_id' => 'required|numeric',
         'departments_code' => 'required',
     ];
    }
}
