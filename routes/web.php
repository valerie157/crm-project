<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ActivityController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/', 'HomeController@index')->name('home');

// Accounts Routes
Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('/accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');
Route::get('/accounts/{account}', [AccountController::class, 'show'])->name('accounts.show');
Route::get('/accounts/{account}/edit', [AccountController::class, 'edit'])->name('accounts.edit');
Route::put('/accounts/{account}', [AccountController::class, 'update'])->name('accounts.update');
Route::delete('/accounts/{account}', [AccountController::class, 'destroy'])->name('accounts.destroy');

// Contacts Routes
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

// Deals Routes
Route::get('/deals', [DealController::class, 'index'])->name('deals.index');
Route::get('/deals/create', [DealController::class, 'create'])->name('deals.create');
Route::post('/deals', [DealController::class, 'store'])->name('deals.store');
Route::get('/deals/{deal}', [DealController::class, 'show'])->name('deals.show');
Route::get('/deals/{deal}/edit', [DealController::class, 'edit'])->name('deals.edit');
Route::put('/deals/{deal}', [DealController::class, 'update'])->name('deals.update');
Route::delete('/deals/{deal}', [DealController::class, 'destroy'])->name('deals.destroy');

// Activities Routes
Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');
Route::get('/activities/{activity}', [ActivityController::class, 'show'])->name('activities.show');
Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');
Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');
Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->name('activities.destroy');
