<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
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

Route::view('/', 'form');

Route::post('/registerUser', [UserController::class, "create"]);
Route::delete('/registerUser/{{id}}', [UserController::class, "destroy"]);

Route::get('/showUser',[FormController::class,"showUser"]);
Route::post('/addUser',[FormController::class,"addUser"]);
Route::get("/deleteUser/{id}",[FormController::class,"deleteUser"]);
Route::get("/editUser/{id}",[FormController::class,"editUser"]);
Route::post("/updateUser/{id}",[FormController::class,"updateUser"]);
// Route::delete('users/{id}', function ($id) {
    
// });
// Route::resource('user', [UserController::class,"show"]);