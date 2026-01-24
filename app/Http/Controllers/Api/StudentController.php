<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StudentsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = StudentsModel::all();

        return response()->json([
            'status' => 'true',
            'massage' => 'List data student',
            'data' => $student,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new StudentsModel;

        $rules = [
            'name' => 'required|max:50',
            'nis' => 'required|max:50',
            'gender' => 'required',
            'status' => 'required',
            'birthday' => 'required',
            'religion' => 'required',
            'contact' => 'required|max:20',
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

        $student = StudentsModel::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'gender' => $request->gender,
            'status' => $request->status,
            'birthday' => $request->birthday,
            'religion' => $request->religion,
            'contact' => $request->contact,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'student berhasil ditambahkan',
            'data' => $student,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = StudentsModel::findOrFail($id);

        return response()->json([
            'status' => 'true',
            'massage' => 'Detail data student',
            'data' => $student,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = StudentsModel::findOrFail($id);

        $rules = [
            'name' => 'required|max:50',
            'nis' => 'required|max:50',
            'gender' => 'required',
            'status' => 'required',
            'birthday' => 'required',
            'religion' => 'required',
            'contact' => 'required|max:20',
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
        $student->name = $request->name;
        $student->nis = $request->nis;
        $student->gender = $request->gender;
        $student->status = $request->status;
        $student->birthday = $request->birthday;
        $student->religion = $request->religion;
        $student->contact = $request->contact;
        $student->save();

        return response()->json([
            'status' => true,
            'message' => 'student berhasil update',
            'data' => $student,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = StudentsModel::findOrFail($id);

        $student->delete();

        return response()->json([
            'status' => true,
            'message' => 'student berhasil dihapus',
            'data' => $student,
        ], 200);
    }
}
