<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
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

//GET HOMEPAGE
Route::get('/', function () {
    return view('index');
});

//GET LOGIN PAGE
Route::get('/login', function () {
    return view('/login.index');
});

//GET FORGOT PASSWORD PAGE
Route::get('/login/forgot_password', function () {
    return view('/login.index');
});

//GET REGISTER ACCOUNT PAGE
Route::get('/login/register_account', function () {
    return view('/login.register_account');
    session_unset('username');
})->name('register_account');

//GET EMAIL VERIFICATION PAGE ONLY AFTER FILLED IN REGISTER ACCOUNT PAGE
Route::get('/login/email_verification', function () {
    //OTHER ACCESSES ARE ILLEGAL
    if (session()->get('legal_route'))
        return view('/login.email_verification');
    else
        return redirect()->route('notification');
})->name('email_verification');

//GET BACK TO REGISTER ACCOUNT PAGE WHEN IN EMAIL VERIFICATION PAGE
Route::get('/login/back_register_account', function() {
    //RETRIEVE USERNAME AND EMAIL IN SESSION TO REFILL IN REGISTER ACCOUNT PAGE
    $username = session()->get('username');
    $email = session()->get('email');

    return redirect()->route('register_account')
    ->with(['username' => $username, 'email' => $email]);
});

//GET NOTIFICATION PAGE
Route::get('notification', function () {
    return view('notification');
})->name('notification');

Route::get('/voucher', function () {
    return view('/voucher.index');
});

Route::get('/event', [AdminController::class, 'Event'])->middleware([Authenticate::class]);

//POST LOGIN REQUEST
Route::post('login', [AuthController::class, 'Login']);

//POST REGISTER ACCOUNT REQUEST
Route::post('/login/register_account', [HomeController::class, 'RegisterAccount']);
