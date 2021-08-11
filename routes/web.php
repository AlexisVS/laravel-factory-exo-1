<?php

use App\Http\Controllers\BatimentsController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\TypeFormationsController;
use App\Models\Batiments;
use App\Models\Eleves;
use App\Models\Formations;
use App\Models\TypeFormations;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/batiments', function () {
    $batiments = Batiments::all();
    return view('pages.batiments', compact('batiments'));
});

Route::get('/eleves', function () {
    $eleves = Eleves::all();
    return view('pages.eleves', compact('eleves'));
});

Route::get('/formations', function () {
    $formations = Formations::all();
    return view('pages.formations', compact('formations'));
});

Route::get('/type-formations', function () {
    $typeFormations = TypeFormations::all();
    return view('pages.typeFormations', compact('typeFormations'));
});

Route::get('/backend', function () {
    return view('back.adminDasboard');
});

Route::resource("backend/batiment", BatimentsController::class);
Route::resource("backend/formation", FormationsController::class);
Route::resource("backend/type-formation", TypeFormationsController::class);
Route::resource("backend/eleve", ElevesController::class);
