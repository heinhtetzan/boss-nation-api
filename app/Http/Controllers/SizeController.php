<?php

namespace App\Http\Controllers;

use id;
use App\Models\size;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Resources\SizeResource;
use App\Http\Requests\StoresizeRequest;
use App\Http\Requests\UpdatesizeRequest;
use Illuminate\Support\Facades\Validator;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('q');
        $validSortColumns = ['id', 'size'];
        $sortBy = in_array($request->input('sort_by'), $validSortColumns, true) ? $request->input('sort_by') : 'id';
        $sortDirection = in_array($request->input('sort_direction'), ['asc', 'desc'], true) ? $request->input('sort_direction') : 'desc';
        $limit = $request->input('limit', 5);

        $limit = is_numeric($limit) && $limit > 0 && $limit <= 100 ? (int)$limit : 5;

        $query = Size::query();

        if ($searchTerm) {
            $query->where(function ($q) use ($searchTerm) {
                $q->where('size', 'like', '%' . $searchTerm . '%');
            });
        }

        $query->orderBy($sortBy, $sortDirection);

        $sizes = $query->paginate($limit);

        $sizes->appends([
            'q' => $searchTerm,
            'sort_by' => $sortBy,
            'sort_direction' => $sortDirection,
            'limit' => $limit,
        ]);

        return SizeResource::collection($sizes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresizeRequest $request)
    {
        $size = size::create([
            'size' => $request->size,
            'slug' => Str::slug($request->size),
            'user_id' => auth()->id()
        ]);

        return response()->json([
            'message' => 'Size created successfully',
            'data' => new SizeResource($size),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $validated = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:sizes,id',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => 'Invalid Size ID'
            ], 404);
        }

        $size = size::find($id);

        return response()->json([
            'message' => 'Size retrieved successfully',
            'data' => new SizeResource($size)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesizeRequest $request, size $size)
    {
          $size->update($request->only([
            'size',
            'slug' => Str::slug($request->size),
        ]));

        return response()->json([
            'message' => 'Size updated successfully',
            'data' => new SizeResource($size)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $validated = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:sizes,id',
        ]);

        if ($validated->fails()) {
            return response()->json([
                'message' => 'Invalid Size ID'
            ], 404);
        }

        $product = size::find($id);

        $product->delete();

        return response()->json([
            'message' => 'Size deleted successfully'
        ]);
    }
}
