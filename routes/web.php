<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoggedController;
use App\Http\Controllers\TechnologyController;

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

Route :: get('/index', [ProjectController :: class, 'index'])
    -> name('index');

// PROJECT



Route :: get('/project/show/{id}', [LoggedController :: class, 'show'])
    -> middleware(['auth'])
    -> name('project.show');

Route :: get('/project/create', [LoggedController :: class, 'create'])
    -> middleware(['auth'])
    -> name('project.create');
Route :: post('/project/store', [LoggedController :: class, 'store'])
    -> middleware(['auth'])
    -> name('project.store');

Route :: get('/project/{id}/edit', [LoggedController :: class, 'edit'])
    -> middleware(['auth'])
    -> name('project.edit');
Route :: put('/project/{id}/update', [LoggedController :: class, 'update'])
    -> middleware(['auth'])
    -> name('project.update');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// TECHNOLOGY

Route :: get('/technology/show/{id}', [TechnologyController :: class, 'show'])
    -> middleware(['auth'])
    -> name('technology.show');

Route :: get('/technology/create', [TechnologyController :: class, 'create'])
    -> middleware(['auth'])
    -> name('technology.create');
Route :: post('/technology/store', [TechnologyController :: class, 'store'])
    -> middleware(['auth'])
    -> name('technology.store');

Route :: get('/technology/{id}/edit', [TechnologyController :: class, 'edit'])
    -> middleware(['auth'])
    -> name('technology.edit');
Route :: put('/technology/{id}/update', [TechnologyController :: class, 'update'])
    -> middleware(['auth'])
    -> name('technology.update');

require __DIR__.'/auth.php';
