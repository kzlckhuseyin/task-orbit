<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Companies retrieved successfully',
            'data' => $companies
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|min:3|unique:companies,title',
        ]);
        $company = Company::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Company created successfully',
            'data' => $company
        ], 201);
    }

    public function show(Company $company)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Company retrieved successfully',
            'data' => $company
        ], 200);
    }

    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|min:3|unique:companies,title,' . $company->id,
        ]);
        $company->update($validated);
        return response()->json([
            'status' => 'success',
            'message' => 'Company updated successfully',
            'data' => $company
        ], 200);
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Company deleted successfully'
        ], 200);
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
