<?php

use App\Http\Controllers\WelcomeController;
use App\Livewire\Getstarted;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/website-design-services-for-manufacturing-company', [WelcomeController::class, 'manufacturing'])->name('manufacturing');
Route::get('/redesign', [WelcomeController::class, 'redesign'])->name('redesign');

Route::get('/get-started', Getstarted::class)->name('getstarted');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'icrm'], function () {
    Voyager::routes();
});
