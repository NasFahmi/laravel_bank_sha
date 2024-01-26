<?php

namespace App\Http\Controllers;

use App\Models\Tips;
use App\Http\Requests\StoreTipsRequest;
use App\Http\Requests\UpdateTipsRequest;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tips $tips)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tips $tips)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipsRequest $request, Tips $tips)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tips $tips)
    {
        //
    }
}
