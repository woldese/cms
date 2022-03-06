<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Providers\RouteServiceProvider;

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
    return view('home');
});//fore home page

Route::get('/redirects',[HomeController::class, 'redirects']);//for admin page getting, this is paced in routeserviceProvider

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [HomeController::class, 'index']);
{
    return view('home');
}
