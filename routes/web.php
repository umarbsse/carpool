<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Signup;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [Home::class, 'index']);
Route::get('all', [Home::class, 'index']);


#####################################
#####  Register Account PAGE  ######
#####################################
Route::get('/signup',[Signup::class,'index']);
Route::post('/register',[Signup::class,'register'])->name('register');

#####################################
#####  Login Account PAGE  ######
#####################################
Route::get('/login',[Signup::class,'index']);

