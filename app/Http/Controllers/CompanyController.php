<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    public function store(Request $request)
    {
        $company = Company::create($request->only('title'));
        return response()->json($company, 201);
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        return response()->json($company);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->only('title'));
        return response()->json($company);
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return response()->json(null, 204);
    }

    public function profiles($id)
    {
        $company = Company::findOrFail($id);
        return response()->json($company->profiles);
    }

    public function internships($id)
    {
        $company = Company::findOrFail($id);
        return response()->json($company->internships);
    }
    
}
