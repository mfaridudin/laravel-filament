<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilais = Nilai::with([
            'class',
            'student',
            'periode',
            'teacher',
            'subject',
            'category_nilai',
        ])->get();

        return response()->json([
            'status' => true,
            'message' => 'List data nilai',
            'data' => $nilais,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nilai = new Nilai;

        $rules = [
            'class_id' => 'required|exists:classrooms,id',
            'student_id' => 'required|exists:students,id',
            'periode_id' => 'required|exists:periodes,id',
            'teacher_id' => 'required|exists:teachers,id',
            'subject_id' => 'required|exists:subjects,id',
            'category_nilai_id' => 'required|exists:category_nilais,id',
            'nilai' => 'required|numeric|min:0',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $nilai = Nilai::create([
            'student_id' => $request->student_id,
            'class_id' => $request->class_id,
            'periode_id' => $request->periode_id,
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id,
            'category_nilai_id' => $request->category_nilai_id,
            'nilai' => $request->nilai,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'nilai berhasil ditambahkan',
            'data' => $nilai,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nilai = Nilai::with([
            'class',
            'student',
            'periode',
            'teacher',
            'subject',
            'category_nilai',
        ])->find($id);

        return response()->json([
            'status' => 'true',
            'massage' => 'Detail data periode',
            'data' => $nilai,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nilai = Nilai::with([
            'class',
            'student',
            'periode',
            'teacher',
            'subject',
            'category_nilai',
        ])->find($id);

        $rules = [
            'class_id' => 'required|exists:classrooms,id',
            'student_id' => 'required|exists:students,id',
            'periode_id' => 'required|exists:periodes,id',
            'teacher_id' => 'required|exists:teachers,id',
            'subject_id' => 'required|exists:subjects,id',
            'category_nilai_id' => 'required|exists:category_nilais,id',
            'nilai' => 'required|numeric|min:0',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $nilai->class_id = $request->class_id;
        $nilai->student_id = $request->student_id;
        $nilai->periode_id = $request->periode_id;
        $nilai->teacher_id = $request->teacher_id;
        $nilai->subject_id = $request->subject_id;
        $nilai->category_nilai_id = $request->category_nilai_id;
        $nilai->nilai = $request->nilai;
        $nilai->save();

        return response()->json([
            'status' => true,
            'message' => 'nilai berhasil update',
            'data' => $nilai,
        ], 201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nilai = Nilai::findOrFail($id);

        $nilai->delete();

        return response()->json([
            'status' => true,
            'message' => 'nilai berhasil dihapus',
            'data' => $nilai,
        ], 200);
    }
}
