<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\FonctionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StatistiqueController;
use App\Http\Controllers\StructureController;

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


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard/add', [StructureController::class, 'add'])->name('add');
    Route::post('/dashboard/add', [StructureController::class, 'store'])->name('addStructure');
    Route::get('/dashboard/structureList', [StructureController::class, 'show'])->name('listStructure');
    Route::get('/dashboard/{structure}/edit', [StructureController::class, 'editStructure'])->name("editStructure");
    Route::put('/dashboard/update/{structure}', [StructureController::class, 'updateStructure'])->name("updateStructure");
    Route::delete('/dashboard/delete/{structure}', [StructureController::class, 'deleteStructure'])->name("deleteStructure");
    Route::get('/dashboard/detail', [StructureController::class, 'detail'])->name('detail');
    Route::get('/dashboard/detail/activity', [StructureController::class, 'detailActivity'])->name('detailActivity');
    Route::get('/dashboard/visuel', [StructureController::class, 'visuel'])->name('visuels');
    //members
    Route::resource('members', MemberController::class);
    Route::resource('activite', ActiviteController::class);

    //fonction
    Route::get('/dashboard/fonction/add', [FonctionController::class, 'index'])->name('fonctionView');
    Route::post('/dashboard/fonction/add', [FonctionController::class, 'store'])->name('addFonction');




});
Route::get('/', [StatistiqueController::class, 'statistique'])->middleware(['auth'])->name('dashboard');

Route::fallback(function(){
    return view('404');
});
require __DIR__.'/auth.php';
