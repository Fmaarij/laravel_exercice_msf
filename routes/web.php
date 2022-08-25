<?php

use App\Http\Controllers\BatimentsController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\TypeDeFormationController;
use App\Http\Controllers\TypeformationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ElevesController::class,'index'])->name('eleves');
Route::get('/batiment', [BatimentsController::class,'index'])->name('batiment');
Route::get('/formation', [FormationsController::class,'index'])->name('formation');
Route::get('/typeDeFormation', [TypeDeFormationController::class,'index'])->name('typeDeFormation');

//delete typdeformation
Route::delete('/{id}/delete', [TypeDeFormationController::class,'destroy']);
//create/store de donnée
Route::post('create', [TypeDeFormationController::class,'store']);
//show
Route::get('edittypedeformation/{id}', [TypeDeFormationController::class,'show']);
//update typedeformation
Route::put('edittypedeformation/{id}/update', [TypeDeFormationController::class,'update']);
