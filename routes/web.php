<?php

use App\Http\Controllers\BatimentsController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\TypeDeFormationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

// Routes des eleves
Route::get( '/', [ ElevesController::class, 'index' ] )->name( 'eleves' );
//Delete eleve
Route::delete( '/{id}/deleleve', [ ElevesController::class, 'destroy' ] );
//create//store eleve
Route::post( 'createeleve', [ ElevesController::class, 'store' ] );
//show id eleve
Route::get( '/editeleve/{id}', [ ElevesController::class, 'show' ] );
//update eleve
Route::put( '/editeleve/{id}/update', [ ElevesController::class, 'update' ] );
//fin des routes des eleves

/*Routes des batiments*/
Route::get( '/batiment', [ BatimentsController::class, 'index' ] )->name( 'batiment' );
//Delete batiment
Route::delete( '/{id}/deleet', [ BatimentsController::class, 'destroy' ] );
//create//store batiement
Route::post( '/createBatiment', [ BatimentsController::class, 'store' ] );
//show id Batiment
Route::get( '/editbatiment/{id}', [ BatimentsController::class, 'show' ] );
//update batiment
Route::put( '/editbatiment/{id}/update', [ BatimentsController::class, 'update' ] );
/*Fin des routes des batiments*/

/*Routes des Formation*/
Route::get( '/formation', [ FormationsController::class, 'index' ] )->name( 'formation' );
//delete typdeformation
Route::delete( '{id}/delet', [ FormationsController::class, 'destroy' ] );
//create/store données /
Route::post( 'createFormation', [ FormationsController::class, 'store' ] );
//show
Route::get( 'editformation/{id}', [ FormationsController::class, 'show' ] );
//update formation // !!!
Route::put( 'editformation/{id}/update', [ FormationsController::class, 'update' ] );
/* fin routes des Formation*/

/*Routes de Type de Formation*/
Route::get( '/typeDeFormation', [ TypeDeFormationController::class, 'index' ] )->name( 'typeDeFormation' );
//delete typdeformation
Route::delete( '/{id}/delete', [ TypeDeFormationController::class, 'destroy' ] );
//create/store de donnée
Route::post( 'create', [ TypeDeFormationController::class, 'store' ] );
//show
Route::get( 'edittypedeformation/{id}', [ TypeDeFormationController::class, 'show' ] );
//update typedeformation
Route::put( 'edittypedeformation/{id}/update', [ TypeDeFormationController::class, 'update' ] );

/*Fin de Routes de Type de Formation*/
