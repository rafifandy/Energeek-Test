<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_skills;
use App\Http\Controllers\C_jobs;
use App\Http\Controllers\C_candidates;

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
Route::resource('/api/skills',C_skills::class);
Route::resource('/api/jobs',C_jobs::class);
Route::resource('/api/candidates',C_candidates::class);


Route::get('/', function () {
    return view('welcome');
});
