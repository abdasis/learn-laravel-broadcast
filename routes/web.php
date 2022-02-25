<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function (){
    return view('welcome');
});
Route::group(['prefix' => 'users'], function(){
    Route::get('/', \App\Http\Livewire\Users\Index::class)->name('users.index');
    Route::get('create', \App\Http\Livewire\Users\Create::class)->name('users.create');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
