<?php

namespace App\Http\Controllers;

use App\Models\eleves;
use App\Http\Requests\StoreelevesRequest;
use App\Http\Requests\UpdateelevesRequest;
use Illuminate\Http\Request;

class ElevesController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $dbEleves = eleves::all();
        return view( 'frontend.pages.eleves', compact( 'dbEleves' ) );
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
    * @param  \App\Http\Requests\StoreelevesRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $dbEleves = new eleves;
        $dbEleves->nom = $request->nom;
        $dbEleves->prenom = $request->prenom;
        $dbEleves->age = $request->age;
        $dbEleves->etat = $request->etat;
        $dbEleves->save();
        return redirect()->back();

    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\eleves  $eleves
    * @return \Illuminate\Http\Response
    */

    public function show( eleves $eleves, $id ) {
        $dbEleves = eleves::find( $id );
        return view( 'frontend.pages.editeleve', compact( 'dbEleves' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\eleves  $eleves
    * @return \Illuminate\Http\Response
    */

    public function edit( eleves $eleves ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateelevesRequest  $request
    * @param  \App\Models\eleves  $eleves
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $dbEleves = eleves::find( $id );
        $dbEleves->nom = $request->nom;
        $dbEleves->prenom = $request->prenom;
        $dbEleves->age = $request->age;
        $dbEleves->etat = $request->etat;
        $dbEleves->save();
        return redirect('/');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\eleves  $eleves
    * @return \Illuminate\Http\Response
    */

    public function destroy( eleves $eleves, $id ) {
        $dbEleves = eleves::find( $id );
        $dbEleves->delete();
        return redirect()->back();
    }
}
