<?php

namespace App\Http\Controllers;

use App\Http\Resources\FittingResource;
use App\Models\Fit;
use App\Http\Requests\StoreFitRequest;
use App\Http\Requests\UpdateFitRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('q');
        $validSortColumns = ['id', 'name'];
        $sortBy = in_array($request->input('sort_by'), $validSortColumns, true) ? $request->input('sort_by') : 'id';
        $sortDirection = in_array($request->input('sort_direction'), ['asc', 'desc'], true) ? $request->input('sort_direction') : 'desc';
        $limit = $request->input('limit', 5);

        $limit = is_numeric($limit) && $limit > 0 && $limit <= 100 ? (int) $limit : 5;

        $query = Fit::query();

        if ($searchTerm) {
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%');
            });
        }

        $query->orderBy($sortBy, $sortDirection);

        $fit = $query->paginate($limit);

        $fit->appends([
            'q' => $searchTerm,
            'sort_by' => $sortBy,
            'sort_direction' => $sortDirection,
            'limit' => $limit,
        ]);

        return FittingResource::collection($fit);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFitRequest $request)
    {
        $fit = Fit::create([
            "name" => $request->name,
            "user_id" => auth()->id()
        ]);

        return response()->json([
            'message' => 'Fitting created successfully',
            'data' => new FittingResource($fit)
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $validated = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:fits,id',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => 'Invalid Fitting ID'
            ], 404);
        }

        $fit = Fit::find($id);

        return response()->json([
            'message' => 'Fitting retrieved successfully',
            'data' => new FittingResource($fit)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFitRequest $request, $id)
    {
        $fit = Fit::find($id);

        if (!$fit) {
            return response()->json([
                'message' => 'Invalid Fitting ID'
            ], 404);
        }

        // Update the model with the request data
        $fit->update($request->only([
            'name',
        ]));

        return response()->json([
            'message' => 'Fitting updated successfully',
            'data' => new FittingResource($fit),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $validated = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:fits,id',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => 'Invalid Fitting ID'
            ], 404);
        }

        $fit = Fit::find($id);

        $fit->delete();

        return response()->json([
            'message' => 'Fitting deleted successfully'
        ]);
    }
}
