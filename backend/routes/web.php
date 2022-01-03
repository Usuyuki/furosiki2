<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OkuruController;
use App\Http\Controllers\UketoruController;
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

Route::get('/', function () {
    return view('furosiki.top');
});
Route::get('/privacyPolicy', function () {
    return view('furosiki.privacyPolicy');
});
Route::get('/terms', function () {
    return view('furosiki.terms');
});

Route::get('/okuru', [OkuruController::class,"read"])->name('okuru');
Route::get('/okuru/kakunin', [OkuruController::class,"read"])->name('okuruKakunin');
Route::get('/okutta', [OkuruController::class,"read"])->name('okutta');

Route::get('/uketoru', [UketoruController::class,"read"])->name('uketoru');
Route::get('/uketoru/{uuid}', [UketoruController::class,"read"])->name('uketoruUuid');
Route::get('/uketoru/kakunin', [UketoruController::class,"read"])->name('uketoruKkakunin');
Route::get('/uketotta', [UketoruController::class,"read"])->name('uketotta');