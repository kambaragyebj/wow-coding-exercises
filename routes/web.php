<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercises\EmployeeController;
use App\Http\Controllers\WowcodingexerciseController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[WowcodingexerciseController::class,'showEmployeeData']);
Route::get('/exercise-2',[WowcodingexerciseController::class,'numberOfVowels']);
Route::view('/exercise-3', 'pyramid');
// Route::get("/test-3",[WowcodingexerciseController::class,'pyramid']);
Route::get("/exercise-4",[WowcodingexerciseController::class,'createQueue']);
Route::get("/exercise-5",[WowcodingexerciseController::class,'getDenominations']);
