<?php

use App\Http\Controllers\Frontcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Frontcontroller::class, 'welcome'])->name('home');

route::get('/Details', [Frontcontroller::class, 'Details'])->name('dettagli');

route::get('/AllArticles', [Frontcontroller::class, 'Articoli'])->name('articoli');

Route::get('/Form', [Frontcontroller::class, 'form'])->name('form');
route::post('/contatti/invio', [Frontcontroller::class, 'invioContatto'])->name('contatto.invio');

