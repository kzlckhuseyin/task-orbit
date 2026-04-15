<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Models\Role;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test', function () {
    return [
        'status' => 'success'
    ];
});

//companies
Route::apiResource('companies', CompanyController::class);
//profiles
Route::apiResource('profiles', ProfileController::class);
//roles
Route::get('roles', [RoleController::class, 'index']);
Route::get('roles/{role}', [RoleController::class, 'show']);
//internships
Route::apiResource('internships', InternshipController::class);
Route::get('companies/{id}/profiles', [CompanyController::class, 'profiles']);
Route::get('companies/{id}/internships', [CompanyController::class, 'internships']);
