<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\MatController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('vue1');

});



//Route::get('/matiere', [MatController::class, 'index'])->name('matiere.index');

//Route::get('/epreuve', [EpreuveController::class, 'index'])->name('epreuve.index');

//Route::post('/epreuve', [EpreuveController::class, 'store'])->name('epreuves.store');


//Add Matiere
Route::get('/matiere', [MatController::class,'index'])->name('matiere');

Route::post('/ajouterMatieres', [MatController::class, 'insertMatiere'])->name('ajoutermatiere');
Route::get('/ajouterMatieres', [MatController::class, 'create'])->name('ajoutermatiere');


//Add Epreuve
Route::get('/ajouterEpreuve', [EpreuveController::class, 'create'])->name('ajouterepreuve');

Route::post('/ajouterEpreuve', [EpreuveController::class, 'insertEpreuve'])->name('ajouterepreuve');


Route::get('/epreuve', [EpreuveController::class,'index'])->name('epreuve');
