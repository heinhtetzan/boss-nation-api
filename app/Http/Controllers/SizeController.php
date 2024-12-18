<?php

namespace App\Http\Controllers;

use App\Models\size;
use App\Http\Requests\StoresizeRequest;
use App\Http\Requests\UpdatesizeRequest;

class SizeController extends Controller
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
    public function store(StoresizeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesizeRequest $request, size $size)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(size $size)
    {
        //
    }
}
