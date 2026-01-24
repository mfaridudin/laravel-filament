<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CategoryNilaisModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = CategoryNilaisModel::all();

        return response()->json([
            'status' => 'true',
            'massage' => 'List data category',
            'data' => $category,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new CategoryNilaisModel;

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

        $category = CategoryNilaisModel::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'category berhasil ditambahkan',
            'data' => $category,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = CategoryNilaisModel::findOrFail($id);

        return response()->json([
            'status' => 'true',
            'massage' => 'Detail data category',
            'data' => $category,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = CategoryNilaisModel::findOrFail($id);

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

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        return response()->json([
            'status' => true,
            'message' => 'category berhasil update',
            'data' => $category,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = CategoryNilaisModel::findOrFail($id);

        $category->delete();

        return response()->json([
            'status' => true,
            'message' => 'category berhasil dihapus',
            'data' => $category,
        ], 200);
    }
}
