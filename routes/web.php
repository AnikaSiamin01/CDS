<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Admin Route
Route::get('/admin',[AdminController::class,'index'])->middleware(['auth'])->name('admin');
Route::get('/admin/create',[AdminController::class,'courseCreate'])->middleware(['auth'])->name('admin.course.create');
Route::post('/admin/create/store',[AdminController::class,'courseCreateStore'])->middleware(['auth'])->name('admin.course.store');
Route::get('/make/choice',[AdminController::class,'choiceShow'])->middleware(['auth'])->name('make_choice');
Route::post('/course/assign',[AdminController::class,'choiceAssign'])->middleware(['auth'])->name('admin.course.assign');
