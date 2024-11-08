<?php

use App\Livewire\Pages\Auth;
use App\Livewire\Pages\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('index');
});
Route::get('/test', function () {
     return view('index2');
});
Route::get('/catalog', function () {
     return view(view: 'pages.catalog');
});

Route::get('/auth', Auth::class);

