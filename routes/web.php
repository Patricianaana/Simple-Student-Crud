<?php

use App\Http\Controllers\StudentCrudController;
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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('studentList');
});

Route::get('users', function(){
    return view('saveData');
});


Route::post('users',[StudentCrudController::class, 'addStudent']);//for create
Route::get('/',[StudentCrudController::class, 'viewStudent']);//for read
Route::get('edit/{id}',[StudentCrudController::class,'editData']);//for edit
Route::post('/edit',[StudentCrudController::class,'updateData']);//for update
