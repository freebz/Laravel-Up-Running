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

Route::get('people', function (Request $request) {
    $people = []; // 사람들의 목록

    $perPage = 15;
    $offsetPages = $request->input('page', 1) - 1;

    // 페이지네이터가 데이터를 잘라주지 않으므로 직접 처리해야 한다.
    $people = array_slice(
        $people,
        $offsetPages * $perPage,
        $perPage
    );

    return new Paginator(
        $people,
        $perPage
    );
});

Route::get('/es/contacts/show/{id}', function () {
    // 이 예제를 위해서 서비스 공급자 대신에 수동으로 로케일을 설정했다.
    App::setLocale('es');
    return view('contacts.show');
});
