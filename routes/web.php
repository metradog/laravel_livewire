<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;
use App\Livewire\ParametrosComponent;
use App\Livewire\InlineComponent;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/parametros/{id}/{slug}', ParametrosComponent::class)->name('parametros');
Route::get('/inline', InlineComponent::class)->name('inline');