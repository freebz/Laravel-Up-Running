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

Route::view('dashboard', 'dashboard');
Route::view('home', 'home', [ 'pageName' => 'home' ]);
Route::view('sidebar', 'sidebar', [ 'modules' => [] ]);
Route::view('jobs', 'jobs');
Route::view('jobs/apply', 'jobs/apply');


// 예제 4-24 뷰 함수를 사용해 데이터를 전달하는 간단한 방법

Route::get('passing-data-to-views', function () {
    return view('dashboard')
        ->with('key', 'value');
});


// 예제 4-25 모든 라우트에서 사이드바 데이터 전달하기

Route::get('home', function () {
    return view('home')
        ->with('posts', Post::recent());
});

Route::get('about', function () {
    return view('about')
        ->with('posts', Post::recent());
});


// 예제 4-30 라우트의 타입힌트를 통해 서비스를 주입하고 뷰에 데이터로 넘기기

Route::get('backend/sales', function (AnalyticsService $analytics) {
    return view('backend.sales-graphs')
        ->with('analytics', $analytics);
});
