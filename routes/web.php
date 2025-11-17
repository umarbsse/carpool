<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Signup;

use App\Http\Controllers\Login;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [Home::class, 'index']);
Route::get('all', [Home::class, 'index']);


#####################################
#####  Register Account PAGE  ######
#####################################
Route::get('/signup',[Signup::class,'index'])->name('signup');
Route::post('/register',[Signup::class,'register'])->name('register');

#####################################
#####  Login Account PAGE  ######
#####################################
Route::get('/login',[Login::class,'index'])->name('login');

