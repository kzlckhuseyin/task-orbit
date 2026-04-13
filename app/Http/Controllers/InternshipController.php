<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        // Retrieve all internships from the database
        $internships = Internship::all();

        // Return the internships as a JSON response
        return response()->json([
            'status' => 'success',
            'message' => 'Internships retrieved successfully',
            'data' => $internships,
        ], 200);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'company_id' => 'required|exists:companies,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);

        // Create a new internship record in the database
        $internship = Internship::create($validated);

        // Return a response indicating success
        return response()->json([
            'status' => 'success',
            'message' => 'Internship created successfully',
            'data' => $internship,
        ], 201);
    }

    public function update(Request $request, Internship $internship)
    {

        // Validate the incoming request data
        $validated = $request->validate([
            'company_id' => 'sometimes|exists:companies,id',
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'status' => 'sometimes|boolean',
        ]);

        // Update the internship record with the validated data
        $internship->update($validated);

        // Return a response indicating success
        return response()->json([
            'status' => 'success',
            'message' => 'Internship updated successfully',
            'data' => $internship,
        ], 200);
    }

    public function show(Internship $internship)
    {
        // Return the internship details as a JSON response
        return response()->json([
            'status' => 'success',
            'message' => 'Internship retrieved successfully',
            'data' => $internship,
        ], 200);
    }

    public function destroy(Internship $internship)
    {
        // Delete the internship record from the database
        $internship->delete();

        // Return a response indicating success
        return response()->json([
            'status' => 'success',
            'message' => 'Internship deleted successfully',
        ], 200);
    }
}
