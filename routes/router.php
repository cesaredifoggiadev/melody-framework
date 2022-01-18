<?php

use App\Http\Controllers\Controller;
use Melody\Http\Route;

Route::get('/', [Controller::class, 'example'])->name('home');