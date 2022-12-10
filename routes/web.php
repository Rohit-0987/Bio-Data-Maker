<?php

use App\Http\Controllers\preview_biodata;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\create_bio_data;
use App\Http\Controllers\view_biodata;



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
    return view('index');
});

Route::get('/create_bio_data', function () {
    return view('create_bio_data');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/create_bio_data_submit',[create_bio_data::class,'create_bio_data_submit'])->name('crete_bio_data_submit');
    Route::get('/view_bio_data',[view_biodata::class,'view_bio_data'])->name('view_bio_data');
    Route::get('/preview_biodata',[preview_biodata::class,'preview'])->name('preview');

});




require __DIR__.'/auth.php';


