<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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

Route::view("/admin/{any}", "app")->where("any", ".*");
//Route::resource('account', 'AccountController');
Route::get('/accounts', [AccountController::class, 'getList']);
Route::get('/accounts/search', [AccountController::class, 'search']);

