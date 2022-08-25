<?php

namespace App\Http\Controllers;

use App\Models\batiments;
use App\Http\Requests\StorebatimentsRequest;
use App\Http\Requests\UpdatebatimentsRequest;
use Illuminate\Http\Request;

class BatimentsController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $dbBatiment = batiments::all();
        return view( 'frontend.pages.batiment', compact( 'dbBatiment' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StorebatimentsRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $dbBatiment = new batiments;
        $dbBatiment->nom = $request->nom;
        $dbBatiment->description = $request->description;
        $dbBatiment->save();
        return redirect()->back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\batiments  $batiments
    * @return \Illuminate\Http\Response
    */

    public function show( batiments $batiments, $id ) {
        $dbBatiment = batiments::find( $id );
        return view( 'frontend.pages.editbatiment', compact( 'dbBatiment' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\batiments  $batiments
    * @return \Illuminate\Http\Response
    */

    public function edit( batiments $batiments ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdatebatimentsRequest  $request
    * @param  \App\Models\batiments  $batiments
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $dbBatiment = batiments::find( $id );
        $dbBatiment->nom = $request->nom;
        $dbBatiment->description = $request->description;
        $dbBatiment->save();
        return redirect( '/batiment' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\batiments  $batiments
    * @return \Illuminate\Http\Response
    */

    public function destroy( batiments $batiments, $id ) {
        $dbBatiment = batiments::find( $id );
        $dbBatiment->delete();
        return redirect()->back();
    }
}
