<?php

namespace App\Http\Controllers;

use App\Models\formations;
use App\Http\Requests\StoreformationsRequest;
use App\Http\Requests\UpdateformationsRequest;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreformationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreformationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function show(formations $formations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function edit(formations $formations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateformationsRequest  $request
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateformationsRequest $request, formations $formations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function destroy(formations $formations)
    {
        //
    }
}
