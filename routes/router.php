<?php

use App\Http\Controllers\Controller;
use Melody\Http\Route;

Route::get('/', [Controller::class, 'example'])->name('home');
Route::get('/entities', [Controller::class, 'entities']);
Route::get('/example', [Controller::class, 'example']);
Route::get('/entity/{id}', [Controller::class, 'entity'])->name('entity');
Route::post('/entity', [Controller::class, 'store'])->name('storeEntity');
Route::get('/delete/{id}', [Controller::class, 'delete'])->name('deleteEntity');