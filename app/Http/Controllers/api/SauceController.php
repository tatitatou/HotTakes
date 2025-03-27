<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Sauce;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Sauce::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'manufacturer' => 'required|string|max:255',
            'description' => 'required|string',
            'mainPepper' => 'nullable|string',
            'imageUrl' => 'nullable|string',
            'heat' => 'nullable|integer|min:1|max:10'
        ]);

        $sauce = Sauce::create($validated);
        return response()->json($sauce, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $sauce = Sauce::findOrFail($id);
        return response()->json($sauce, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'manufacturer' => 'required|string|max:255',
            'description' => 'required|string',
            'mainPepper' => 'nullable|string',
            'imageUrl' => 'nullable|string',
            'heat' => 'nullable|integer|min:1|max:10'
        ]);
    
        $sauce = Sauce::findOrFail($id);
        $sauce->update($validated);
    
        return response()->json($sauce, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $sauce = Sauce::findOrFail($id);
        $sauce->delete();
        return response()->json(['message' => 'Sauce supprimée avec succès'], 200);
    }
}
