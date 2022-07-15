<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Requests\AddDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use Symfony\Component\HttpFoundation\Response;

class DepartmentController extends Controller
{

    public function index()
    {
      $departments = Departments::all();
      return $departments;
    }


    public function store(AddDepartmentRequest $request)
    {
      $departments = Departments::create($request->only('departments_name', 'fac_id', 'departments_code'));

      return response($departments, Response::HTTP_CREATED);
    }


    public function show(Departments $departments)
    {
        return $departments;
    }


    public function update(UpdateDepartmentRequest $request, Departments $departments)
    {
      $departments->update($request->only('departments_name','fac_id','departments_code'));

        return response($departments, Response::HTTP_ACCEPTED);
    }


    public function destroy(Departments $departments)
    {
      $departments->delete();
      return response(null, Response::HTTP_NO_CONTENT);
    }
}
