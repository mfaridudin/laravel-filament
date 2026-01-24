<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DepartmentsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = DepartmentsModel::all();

        return response()->json([
            'status' => 'true',
            'massage' => 'List data department',
            'data' => $department,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $department = new DepartmentsModel;

        $rules = [
            'name_department' => 'required|max:50',
            'slug' => 'required|max:50',
            'description' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $department = DepartmentsModel::create([
            'name_department' => $request->name_department,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'department berhasil ditambahkan',
            'data' => $department,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = DepartmentsModel::findOrFail($id);

        return response()->json([
            'status' => 'true',
            'massage' => 'Detail data department',
            'data' => $department,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = DepartmentsModel::findOrFail($id);

        $rules = [
            'name_department' => 'required|max:50',
            'slug' => 'required|max:50',
            'description' => 'required',

        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $department->name_department = $request->name_department;
        $department->slug = $request->slug;
        $department->save();

        return response()->json([
            'status' => true,
            'message' => 'department berhasil update',
            'data' => $department,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = DepartmentsModel::findOrFail($id);

        $department->delete();

        return response()->json([
            'status' => true,
            'message' => 'department berhasil dihapus',
            'data' => $department,
        ], 200);
    }
}
