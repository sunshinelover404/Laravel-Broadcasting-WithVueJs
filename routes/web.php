<?php

use Illuminate\Support\Facades\Route;
use App\Events\My;
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
    // event(new My(['message' => 'Hello, World!']));
    $message='hello world';
    My::dispatch($message);
    return view('welcome');
});

Route::get('/listen', function(){
     return view('welcome');
});
