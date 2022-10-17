<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

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
    return view('welcome');
});

Route::get('contact', [ContactController::class, 'index']);

Route::get('contact/{id}', [ContactController::class, 'show']);

Route::get('api/contacts', function () {
    return Contact::all();
});

Route::get('api/contacts/{id}', function ($id) {
    return Contact::findOrFail($id);
});
