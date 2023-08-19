<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodolistController;

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


Route::controller(TodolistController::class)->group(function () {
    Route::get('/', 'TodoList')->name('home');
    Route::post('/add/item', 'addTodoList')->name('additem');
    Route::get('/delete/item/{id}', 'deleteTodoList')->name('itemdelete');
    Route::get('/item/{id}/edit', 'editTodoList')->name('itemedit');
    Route::post('/update/item', 'updateTodoList')->name('updateitem');
});

// Route::post('/add/item',[TodolistController::class,'addTodoList'])->name('additem');
