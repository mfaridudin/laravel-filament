<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubjectsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject = SubjectsModel::all();

        return response()->json([
            'status' => 'true',
            'massage' => 'List data subject',
            'data' => $subject,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = new SubjectsModel;

        $rules = [
            'name' => 'required|max:50',
            'slug' => 'required|max:50',
            'kode' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $subject = SubjectsModel::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'kode' => $request->kode,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'subject berhasil ditambahkan',
            'data' => $subject,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = SubjectsModel::findOrFail($id);

        return response()->json([
            'status' => 'true',
            'massage' => 'Detail data subject',
            'data' => $subject,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = SubjectsModel::findOrFail($id);

        $rules = [
            'name' => 'required|max:50',
            'slug' => 'required|max:50',
            'kode' => 'required',

        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $subject->name = $request->name;
        $subject->slug = $request->slug;
        $subject->kode = $request->kode;
        $subject->save();

        return response()->json([
            'status' => true,
            'message' => 'subject berhasil update',
            'data' => $subject,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = SubjectsModel::findOrFail($id);

        $subject->delete();

        return response()->json([
            'status' => true,
            'message' => 'subject berhasil dihapus',
            'data' => $subject,
        ], 200);
    }
}
