<?php

namespace App\Http\Controllers;

use App\Models\Typedeformation;
use App\Http\Requests\StoreTypeDeFormationRequest;
use App\Http\Requests\UpdateTypeDeFormationRequest;

class TypeDeFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbtypedeformation = Typedeformation::all();
        return view('frontend.pages.typeDeFormation', compact('dbtypedeformation'));
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
     * @param  \App\Http\Requests\StoreTypeDeFormationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeDeFormationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeDeFormation  $typeDeFormation
     * @return \Illuminate\Http\Response
     */
    public function show(TypeDeFormation $typeDeFormation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeDeFormation  $typeDeFormation
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeDeFormation $typeDeFormation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeDeFormationRequest  $request
     * @param  \App\Models\TypeDeFormation  $typeDeFormation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeDeFormationRequest $request, TypeDeFormation $typeDeFormation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeDeFormation  $typeDeFormation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeDeFormation $typeDeFormation)
    {
        //
    }
}
