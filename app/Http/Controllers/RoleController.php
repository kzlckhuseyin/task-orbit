<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{   
    // Hangi roller var?
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Roles retrieved successfully',
            'data' => Role::all()
        ],200);
    }

    // Bu rol ne?
    public function show(Role $role)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Role retrieved successfully',
            'data' => $role
        ], 200);
    }

    /* Diğer işlemler (store, update, destroy) 
    yapmadık çünkü zaten sadece intern ve mentor 
    rolleri var ve bunlar sabit kalacak.
    Eğer yeni roller eklenmesi gerekirse 
    bu işlemler eklenebilir.*/
}
