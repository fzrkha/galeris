<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wancront;

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

Route::get('/', [wancront::class, 'index']);

Route::get('/masuk', [wancront::class, 'signin']);

Route::get('/gallery', [wancront::class, 'gallery']);

Route::get('/about', [wancront::class, 'about']);