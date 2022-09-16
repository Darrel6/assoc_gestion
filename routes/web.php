<?php

use App\Http\Controllers\ActiviteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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
    //members
    Route::resource('members', MemberController::class);
    Route::resource('activite', ActiviteController::class);




});
Route::get('/', [StructureController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::fallback(function(){
    return view('404');
});
require __DIR__.'/auth.php';
