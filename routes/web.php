<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\Signup;

use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;

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
Route::post('/auth',[Login::class,'auth'])->name('auth');


#####################################
#####  Login Account PAGE  ######
#####################################
Route::get('/forgotpassword',[ForgotPassword::class,'index'])->name('forgotpassword');
Route::post('/reset_password',[ForgotPassword::class,'reset_password'])->name('reset_password');
Route::get('/reset_password', function () {
    return redirect()->back()->with('error', 'GET request not allowed');
});



Route::get('/send_reset_email/{reset_id}',[ForgotPassword::class,'send_reset_email'])->name('send_reset_email');






#####################################
#####  Dashboard  ######
#####################################
Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard');

