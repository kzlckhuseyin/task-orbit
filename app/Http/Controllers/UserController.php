<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Tüm kullanıcıları listeler.
    // Admin panelinde "sistemde kimler var?" için kullanılır.
    // User modeli → users tablosuna bağlı.
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Users retrieved successfully',
            'data' => User::all()
        ]);
    }

    // Tek bir kullanıcıyı profilleriyle birlikte getirir.
    // profiles() ilişkisi User modelinde tanımlı → profiles tablosuna bağlanır.
    // load('profiles') ile tek sorguda hem user hem profiller gelir.
    public function show(User $user)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'User retrieved successfully',
            'data' => $user->load('profiles')
        ]);
    }

    // Kullanıcının aktif profilini değiştirir.
    // Örn: Mentor profilinden Intern profiline geçmek istediğinde çalışır.
    // current_profile_id → users tablosundaki kolon, hangi profille işlem yaptığını tutar.
    public function switchProfile(Request $request, User $user)
    {
        $validated = $request->validate([
            // Gelen profile_id bu kullanıcıya ait olmalı, başkasının profiline geçemesin.
            'profile_id' => 'required|exists:profiles,id'
        ]);

        // Kullanıcının kendi profili mi kontrol et
        $owns = $user->profiles()->where('id', $validated['profile_id'])->exists();

        if (!$owns) {
            return response()->json([
                'status' => 'error',
                'message' => 'This profile does not belong to this user'
            ], 403);
        }

        $user->update(['current_profile_id' => $validated['profile_id']]);

        return response()->json([
            'status' => 'success',
            'message' => 'Profile switched successfully',
            'data' => $user->fresh() // Güncellenmiş user verisi
        ]);
    }
}
