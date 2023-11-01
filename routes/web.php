<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    $note = User::first();
    // return view('welcome');
    return $note;
});

Route::get('/user',[UserController::class,"show"]);

Route::post('/registerUser',[UserController::class,"create"]);

// Route::resource('user', [UserController::class,"show"]);