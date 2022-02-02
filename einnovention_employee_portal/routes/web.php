<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/alert', function () {
    return view('alert');
});

Route::get('/add_employee', function () {
    return view('layouts.screens.add_employee');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forget-pass', function () {
    return view('forget-pass');
});

Route::get('/button', function () {
    return view('button');
});

Route::get('/badge', function () {
    return view('badge');
});

Route::get('/tab', function () {
    return view('tab');
});

Route::get('/card', function () {
    return view('card');
});

Route::get('/progress-bar', function () {
    return view('progress-bar');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/switch', function () {
    return view('switch');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/fontawesome', function () {
    return view('fontawesome');
});

Route::get('/typo', function () {
    return view('typo');
});

Route::get('/layouts/menus/menu', function () {
    return view('menu');
});

Route::get('/layouts/menus/header', function () {
    return view('header');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
