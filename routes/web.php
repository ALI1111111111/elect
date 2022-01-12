<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ChakController;
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



Route::get('cand',[CandidateController::class,'index']);
Route::get('cand/add',[CandidateController::class,'create']);
Route::post('/cand/add/store',[CandidateController::class,'store']);

Route::get('chak',[ChakController::class,'show']);
Route::get('/',[ChakController::class,'show']);

Route::get('/chak/add', [ChakController::class, 'create']);
Route::post('/chak/add/store', [ChakController::class, 'store']);
Route::get('/chak/add/show', [ChakController::class, 'show']);

