<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
use App\Livewire\ParametrosComponent;
use App\Livewire\InlineComponent;
use App\Livewire\ActionsComponent;
use App\Livewire\EventosComponent;

use Livewire\Volt\Volt;

// Livewire routes
Livewire\Livewire::setUpdateRoute(function ($handle) {
    // Esta ruta es desde la raiz del proyecto y se debe ubicar el lugar donde se encuentra livewire.js
    return Route::post('/laravel/laravel_livewire/public/livewire/update', $handle);
});
/*
Esta ruta es estatica para  los componentes de Livewire y se ocupa para cuando el manejo del servidor es por LOCALHOST en un servidor normal.
*/

Route::get('/', HomeComponent::class)->name('home');
Route::get('/parametros/{id}/{slug}', ParametrosComponent::class)->name('parametros');
Route::get('/inline', InlineComponent::class)->name('inline');
Route::get('/actions', ActionsComponent::class)->name('ruta_actions');
Route::get('/eventos', EventosComponent::class)->name('ruta_eventos');


// Ruta para el componente Volt
Volt::route('/volt-ejemplo', 'VoltEjemploComponent')->name('ruta_volt_ejemplo');