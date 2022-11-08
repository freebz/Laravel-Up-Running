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

// 폼을 수신하는 라우트
React::post('form', function (Request $request) {
    echo 'name is ' . $request->input('name') . '<br>';
    echo 'all input is ' . print_r($request->all()) . '<br>';
    echo 'user provided email address:' . $request->has('email') ? 'true' : 'false';
});


Route::get('route', function () {
    return new Illuminate\Http\Response('Hello!');
});

// 내용은 동일하지만 글로벌 함수를 이용한 방식:
Route::get('route', function () {
    return response('Hello!');
});


Route::get('route', function () {
    return response('Error!', 400)
        ->header('X-Header-Name', 'header-value')
        ->cookie('cookie-name', 'cookie-value');
});


Route::get('route', function () {
    return response($content)
        ->cookie('signup_dismissed', true);
});


Route::get('/', function (XmlGetterService $xml) {
    $data = $xml->get();
    return response()
        ->view('xml-structure', $data)
        ->header('Content-Type', 'text/xml');
});


Route::post('contacts', function () {
    // contact 저장

    return redirect('dashboard')->with('message', 'Contact created!');
});

Route::get('dashboard', function () {
    // 세션에서 플래시된 데이터를 조회--주로 블레이드 템플릿에서 처리된다.
    echo session('message');
});


// 라우트 GET 메서드에는 미들웨어가 동작하지 않는다...
Route::get('contacts', 'ContactController@index')->middleware('ban-delete');

// 다음과 같이 그룹 기능에 적용하기에 좋다.
Route::prefix('api')->middleware('ban-delete')->group(function () {
    // API 관련 모든 라우트
});
