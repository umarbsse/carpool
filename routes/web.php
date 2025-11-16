<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [Home::class, 'index']);
Route::get('all', [Home::class, 'index']);

