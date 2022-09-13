<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirigeantController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [StructureController::class, 'index'])->middleware(['auth'])->name('dashboard');
    Route::get('/dashboard/add', [StructureController::class, 'add'])->name('add');
    Route::post('/dashboard/add', [StructureController::class, 'store'])->name('addStructure');
    Route::get('/dashboard/structureList', [StructureController::class, 'show'])->name('listStructure');
    Route::get('/dashboard/{structure}/edit', [StructureController::class, 'editStructure'])->name("editStructure");
    Route::put('/dashboard/update/{structure}', [StructureController::class, 'updateStructure'])->name("updateStructure");
    Route::delete('/dashboard/delete/{structure}', [StructureController::class, 'deleteStructure'])->name("deleteStructure");

    Route::get('/dashboard/addDirigeant', [DirigeantController::class, 'add'])->name('addD');
    Route::post('/dashboard/addDirigeant', [DirigeantController::class, 'store'])->name('addDirigeant');
    Route::get('/dashboard/DirigeantList', [DirigeantController::class, 'show'])->name('listDirigeant');
    Route::get('/dashboard/{dirigeant}/edit', [DirigeantController::class, 'editDirigeant'])->name("editDirigeant");
    Route::put('/dashboard/update/{dirigeant}', [DirigeantController::class, 'updateDirigeant'])->name("updateDirigeant");
    Route::delete('/dashboard/delete/{dirigeant}', [DirigeantController::class, 'deleteDirigeant'])->name("deleteDirigeant");

});

require __DIR__.'/auth.php';
