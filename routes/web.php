<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Pages\Auth\Register;
use App\Livewire\Components\Authenticate;
Route::get('/', function () {
     return view('index');
});
Route::get('/test', function () {
     return view('index2');
});
Route::get('/catalog', function () {
     return view(view: 'pages.catalog');
});

Route::get('/auth', function () {
    return view(view: 'pages.auth');
});

Route::get('/filament', function () {
    return view(view: 'pages.filament');
});
//Route::get('/admin/register', [Register::class, 'render'])->name('filament.admin.auth.register');
