<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/coffees', [CoffeeController::class, 'index'])->name('coffees.index');

