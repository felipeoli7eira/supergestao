<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Contact;




Route::get('/', [Home::class, 'index']);

Route::get('/sobre', [About::class, 'index']);

Route::get('/contato', [Contact::class, 'index']);