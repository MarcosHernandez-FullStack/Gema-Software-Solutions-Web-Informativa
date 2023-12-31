<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home\HomeComponent;
use App\Http\Livewire\Portafolio\PortafolioComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', HomeComponent::class)->name('home');
Route::get('/portafolio/{servicio_id}', PortafolioComponent::class)->name('portafolio');