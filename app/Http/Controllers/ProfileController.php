<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Profiles retrieved successfully',
            'data' => $profiles
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'company_id' => 'required|integer',
            'role_id' => 'required|integer',
        ]);

        $profile = Profile::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Profile created successfully',
            'data' => $profile
        ], 201);
    }

    public function show(Profile $profile)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Profile retrieved successfully',
            'data' => $profile
        ], 200);
    }

    public function update(Request $request, Profile $profile)
    {
        $validated = $request->validate([
            'role_id' => 'required|integer',
        ]);

        $profile->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Profile updated successfully',
            'data' => $profile
        ], 200);
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Profile deleted successfully'
        ], 200);
    }
}
