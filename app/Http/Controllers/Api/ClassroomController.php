<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ClassroomsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = ClassroomsModel::all();

        return response()->json([
            'status' => 'true',
            'massage' => 'List data classroom',
            'data' => $classrooms,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $classrooms = new ClassroomsModel;

        $rules = [
            'name' => 'required|max:50',
            'slug' => 'required|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $classrooms = ClassroomsModel::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Classroom berhasil ditambahkan',
            'data' => $classrooms,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classroom = ClassroomsModel::findOrFail($id);

        return response()->json([
            'status' => 'true',
            'massage' => 'Detail data classroom',
            'data' => $classroom,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $classroom = ClassroomsModel::findOrFail($id);

        $rules = [
            'name' => 'required|max:50',
            'slug' => 'required|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $classroom->name = $request->name;
        $classroom->slug = $request->slug;
        $classroom->save();

        return response()->json([
            'status' => true,
            'message' => 'Classroom berhasil update',
            'data' => $classroom,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classroom = ClassroomsModel::findOrFail($id);

        $classroom->delete();

        return response()->json([
            'status' => true,
            'message' => 'Classroom berhasil dihapus',
                'data' => $classroom,
        ], 200);
    }
}
