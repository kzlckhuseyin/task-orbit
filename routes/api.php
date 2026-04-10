<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test', function () {
    return [
        'status' => 'success'
    ];
});

Route::apiResource('companies', CompanyController::class);
Route::get('companies/{id}/profiles', [CompanyController::class, 'profiles']);
Route::get('companies/{id}/internships', [CompanyController::class, 'internships']);
