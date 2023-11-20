<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kg', function () {
    return view('registration.kg');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('registration', RegistrationController::class)
        ->only([
            'index', 'show'
        ]);
});
Route::get('/export-pdf/{registration}', [RegistrationController::class, 'exportPDF'])->name('export');

Route::post('/response', [PaymentController::class, 'response'])->name('response');
