<?php

namespace App\Http\Controllers;

use App\Models\batiments;
use App\Http\Requests\StorebatimentsRequest;
use App\Http\Requests\UpdatebatimentsRequest;

class BatimentsController extends Controller
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
     * @param  \App\Http\Requests\StorebatimentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebatimentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function show(batiments $batiments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function edit(batiments $batiments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebatimentsRequest  $request
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebatimentsRequest $request, batiments $batiments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function destroy(batiments $batiments)
    {
        //
    }
}
