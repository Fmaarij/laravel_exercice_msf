<?php

namespace App\Http\Controllers;

use App\Models\eleves;
use App\Http\Requests\StoreelevesRequest;
use App\Http\Requests\UpdateelevesRequest;

class ElevesController extends Controller
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
     * @param  \App\Http\Requests\StoreelevesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreelevesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function show(eleves $eleves)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function edit(eleves $eleves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateelevesRequest  $request
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateelevesRequest $request, eleves $eleves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function destroy(eleves $eleves)
    {
        //
    }
}
