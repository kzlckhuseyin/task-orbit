<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Tüm task'ları listeler.
    // with('lesson') → hangi derse ait olduğunu da getirir.
    // Task modeli → tasks tablosuna, oradan lesson_id ile lessons tablosuna bağlı.
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Tasks retrieved successfully',
            'data' => Task::with('lesson')->get()
        ]);
    }

    // Yeni task oluşturur.
    // lesson_id zorunlu — task mutlaka bir derse bağlı olmak zorunda.
    // lessons tablosunda o id var mı kontrol eder (exists:lessons,id).
    public function store(Request $request)
    {
        $validated = $request->validate([
            'lesson_id'   => 'required|exists:lessons,id',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $task = Task::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Task created successfully',
            'data' => $task
        ], 201);
    }

    // Tek bir task'ı teslimlerle birlikte getirir.
    // task_submissions() ilişkisi Task modelinde tanımlı → task_submissions tablosuna bağlanır.
    public function show(Task $task)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Task retrieved successfully',
            'data' => $task->load('task_submissions')
        ]);
    }

    // Task'ın başlık veya açıklamasını günceller.
    // lesson_id değiştirilmek istenirse de izin veriyoruz.
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'lesson_id'   => 'sometimes|exists:lessons,id',
            'title'       => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
        ]);

        $task->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Task updated successfully',
            'data' => $task
        ]);
    }

    // Task'ı siler.
    // tasks tablosunda timestamp olmadığı için created_at/updated_at dönmez.
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Task deleted successfully'
        ]);
    }
}
