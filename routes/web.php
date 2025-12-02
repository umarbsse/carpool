<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\Signup;

use App\Http\Controllers\Login;
use App\Http\Controllers\Logout;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\MyAccount;



// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [Home::class, 'index'])->name('home');
//Route::get('all', [Home::class, 'index']);


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
Route::get('/logout',[Logout::class,'index'])->name('logout');


#####################################
#####    Password reset PAGE   ######
#####################################
Route::get('/forgotpassword',[ForgotPassword::class,'index'])->name('forgotpassword');
Route::post('/reset_password',[ForgotPassword::class,'reset_password'])->name('reset_password');
Route::get('/reset_password', function () {
    return redirect()->back()->with('error', 'GET request not allowed');
});



Route::get('/send_reset_email/{reset_id}',[ForgotPassword::class,'send_reset_email'])->name('send_reset_email');
Route::get('/new_password/{reset_token}',[ForgotPassword::class,'new_password'])->name('new_password');
Route::post('/password_update',[ForgotPassword::class,'password_update'])->name('password_update');







#####################################
#####      Logined Routes      ######
#####################################


Route::middleware(['auth_middleware'])->group(function () {
    ########################
    #####  Dashboard  ######
    ########################
    Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard');
    ########################
    #####  MyAccount  ######
    ########################
    Route::get('/setting',[MyAccount::class,'setting'])->name('setting');
    Route::post('/update_setting',[MyAccount::class,'update_setting'])->name('update_setting');
    Route::get('/change_password',[MyAccount::class,'change_password'])->name('change_password');
    Route::post('/my_account_password_update',[MyAccount::class,'password_update'])->name('my_account_password_update');
});

