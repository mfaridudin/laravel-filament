<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PeriodesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periode = PeriodesModel::all();

        return response()->json([
            'status' => 'true',
            'massage' => 'List data periode',
            'data' => $periode,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $periode = new PeriodesModel;

        $rules = [
            'name' => 'required|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $periode = PeriodesModel::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'periode berhasil ditambahkan',
            'data' => $periode,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $periode = PeriodesModel::findOrFail($id);

        return response()->json([
            'status' => 'true',
            'massage' => 'Detail data periode',
            'data' => $periode,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $periode = PeriodesModel::findOrFail($id);

        $rules = [
            'name' => 'required|max:50',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'false',
                'message' => 'Proses Validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $periode->name = $request->name;
        $periode->save();

        return response()->json([
            'status' => true,
            'message' => 'periode berhasil update',
            'data' => $periode,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $periode = PeriodesModel::findOrFail($id);

        $periode->delete();

        return response()->json([
            'status' => true,
            'message' => 'periode berhasil dihapus',
            'data' => $periode,
        ], 200);
    }
}
