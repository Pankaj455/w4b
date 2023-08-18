<?php

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

Route::get('/', function () {
    return redirect()->route("analytics");
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/sign-up', function () {
    return view('auth.register');
});

Route::get('/thank-you', function () {
    return view('thank-you');
});

Route::get("/analytics", function(){
    return view("analytics");
})->name("analytics");

Route::get("/templates", function(){
    return view("templates");
});

Route::get("/campaign", function(){
    return view("campaign");
});
