<?php

namespace App\Http\Controllers;

use App\Models\Programme;
use Illuminate\Http\Request;
use App\Http\Requests\AddProgrammeRequest;
use App\Http\Requests\UpdateProgrammeRequest;
use Symfony\Component\HttpFoundation\Response;

class ProgrammeController extends Controller
{

    public function index()
    {
      $programme = Programme::all();
      return $programme;
    }


    public function store(AddProgrammeRequest $request)
    {
      $programme = Programme::create($request->only('programme_name', 'aprogramme_name'));

      return response($programme, Response::HTTP_CREATED);
    }


    public function show(Programme $programme)
    {
        return $programme;
    }


    public function update(UpdateProgrammeRequest $request, Programme $programme)
    {
      $programme->update($request->only('programme_name', 'aprogramme_name'));

        return response($programme, Response::HTTP_ACCEPTED);
    }


    public function destroy(Programme $programme)
    {
      $programme->delete();
      return response(null, Response::HTTP_NO_CONTENT);
    }
}
