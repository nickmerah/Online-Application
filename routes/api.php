<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProgrammeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//superadmin
Route::prefix('admin')->group(function () {
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


 Route::middleware(['auth:sanctum','scope.superadmin'])->group(function () {
 Route::get('user', [AuthController::class, 'user']);
 Route::post('logout', [AuthController::class, 'logout']);
 Route::put('users/info', [AuthController::class, 'updateUserInfo']);
 Route::put('users/password', [AuthController::class, 'updatePassword']);
 Route::get('allusers', [AuthController::class, 'alluser']);
 Route::apiResource('departments', DepartmentController::class);
 Route::apiResource('programmes', ProgrammeController::class);

 });


//admin
Route::middleware(['auth:sanctum'])->group(function () {
Route::get('submittedapplicants', [ApplicantsController::class, 'completedapplication']);
Route::apiResource('applicants', ApplicantsController::class);
Route::get('applicantspaginated', [ApplicantsController::class, 'allapplicants_paginated']);
});

});
