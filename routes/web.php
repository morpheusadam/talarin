<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('index');
});
Route::get('/test', function () {
     return view('index2');
});
Route::get('/catalog', function () {
     return view('pages.catalog');
});

// Corrected route for Livewire component
//Route::get('test', \App\Http\Livewire\SearchUsers::class);
