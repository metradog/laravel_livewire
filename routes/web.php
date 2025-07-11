<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
use App\Livewire\ParametrosComponent;
use App\Livewire\InlineComponent;
use App\Livewire\ActionsComponent;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/parametros/{id}/{slug}', ParametrosComponent::class)->name('parametros');
Route::get('/inline', InlineComponent::class)->name('inline');
Route::get('/actions', ActionsComponent::class)->name('ruta_actions');