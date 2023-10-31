<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Models\StudentRegister;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Route::get('student_register', [StudentController::class, 'index']);
Route::post('student_register', [StudentController::class, 'store'])->name('student_register.store');