<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        $uploadedFiles = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store the file in the public directory
                $path = $image->store('images', 'public');

                // Save the path to the database
                $gallery = Gallery::create(['image_path' => $path]);

                $uploadedFiles[] = $gallery;
            }
        }

        // Return success response or redirect
        return response()->json([
            'message' => 'Images uploaded and saved to the database successfully.',
            'data' => $uploadedFiles,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return response()->json($gallery);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateGalleryRequest $request, Gallery $gallery)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return response()->json(['message' => 'Image deleted successfully']);
    }
}
