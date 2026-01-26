<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\TeachersModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = TeachersModel::all();

        return response()->json([
            'status' => 'true',
            'massage' => 'List data teacher',
            'data' => $teacher,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new TeachersModel;

        $rules = [
            'name' => 'required|max:50',
            'nip' => 'required|max:50',
            'address' => 'required',
            // 'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $teacher = TeachersModel::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'address' => $request->address,
            'profile' => $request->profile
        ]);

        return response()->json([
            'status' => true,
            'message' => 'teacher berhasil ditambahkan',
            'data' => $teacher,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = TeachersModel::findOrFail($id);

        return response()->json([
            'status' => 'true',
            'massage' => 'Detail data teacher',
            'data' => $teacher,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = TeachersModel::findOrFail($id);

        $rules = [
            'name' => 'required|max:50',
            'nip' => 'required|max:50',
            'address' => 'required',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }
        $teacher->name = $request->name;
        $teacher->nip = $request->nis;
        $teacher->address = $request->gender;
        $teacher->profile = $request->profile;
        $teacher->save();

        return response()->json([
            'status' => true,
            'message' => 'teacher berhasil update',
            'data' => $teacher,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = TeachersModel::findOrFail($id);

        $teacher->delete();

        return response()->json([
            'status' => true,
            'message' => 'teacher berhasil dihapus',
            'data' => $teacher,
        ], 200);
    }
}
