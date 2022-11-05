<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('account', 'AccountController@dashboard');
});

Route::get('login', 'Auth\LoginController@getLogin')->middleware('guest');

Route::get('posts/create', function() {
    // 검증된 사용자에게만 코드가 실행됨...
})->middleware('verifined');

Rouote::middleware('auth:trainees')->group(function () {
    // Trainee 가드의 인증이 필요한 경우 라우트 그룹
});

Route::get('people/create', function () {
    // 인물을 생성한다.
})->middleware('can:create-person');

Route::get('people/{person}/edit', function () {
    // 인물을 수정한다.
})->middleware('can:edit,person');

Route::post('people', function () {
    // 인물을 생성한다.
})->middleware('can:create,App\Models\Person');
