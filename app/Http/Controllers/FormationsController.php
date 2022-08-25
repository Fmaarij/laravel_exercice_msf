<?php

namespace App\Http\Controllers;

use App\Models\formations;
use App\Http\Requests\StoreformationsRequest;
use App\Http\Requests\UpdateformationsRequest;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = formations::all();
        return view('frontend.pages.formation',compact('formations'));
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
    public function store(Request $request)
    {
        $formations = new formations;

        $formations->nom = $request->nom;
        $formations->description = $request->description;

        $formations->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function show(formations $formations,$id)
    {
        $formations = formations::find($id);
        return view('frontend.pages.editformation', compact('formations'));
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
    public function update(Request $request,$id)
    {
        $formations = formations::find($id);
        $formations->nom = $request->nom;
        $formations->description = $request->description;
        $formations->save();
        return redirect('formation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        $formations = formations::find($id);
        $formations->delete();
        return redirect()->back();
    }
}
