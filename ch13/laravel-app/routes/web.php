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

// API를 사용하는 애플리케이션의 Routes/web.php 내부
Route::get('tweeter/password-grant-auth', function () {
    $http = new GuzzleHttp\Client;

    // 패스포트를 사용해 만든 OAuth 서비인 'Tweeter'에 요청을 보낸다.
    $response = $http->post('http://tweeter.test/oauth/token', [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => config('tweeter.id'),
            'client_secret' => config('tweeter.secret'),
            'username' => 'matt@mattstauffer.co',
            'password' => 'my-tweeter-password',
            'scope' => '',
        ],
    ]);

    $thisUsersTokens = json_decode((string) $response->getBody(), true);
    // 토큰을 가지고 필요한 작업을 처리한다.
});

// 스페이스북의 routes/web.php 내부
Route::get('tweeter/redirect', function () {
    $query = http_build_query([
        'client_id' => config('tweeter.id'),
        'redirect_uri' => url('tweeter/callback'),
        'response_type' => 'code',
        'scope' => '',
    ]);

    // 아래와 같이 문자열을 생성
    // client_id={$client_id}&redirect_uri={$redirect_uri}&response_type=code

    return redirect('http://tweeter.test/oauth/authorize?' . $query);
});

// 스페이스북의 routes/web.php 내부
Route::get('tweeter/callback', function (Request $request) {
    if ($request->has('error')) {
        // 에러 처리
    }

    $http = new GuzzleHttp\Client;

    $response = $http->post('http://tweeter.test/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => config('tweeter.id'),
            'client_secret' => config('tweeter.secret'),
            'redirect_uri' => url('tweeter/callback'),
            'code' => $request->code,
        ],
    ]);

    $thisUsersTokens = json_decode((string) $response->getBody(), true);
    // 토큰을 가지고 무엇인가 한다.
});

// 스페이스북의 routes/web.php 내부
Route::get('tweeter/request-refresh', function (Request $request) {
    $http = new GuzzleHttp\Client;

    $params = [
        'grant_type' => 'refresh_token',
        'client_id' => config('tweeter.id'),
        'client_secret' => config('tweeter.secret'),
        'redirect_uri' => url('tweeter/callback'),
        'refresh_token' => $theTokenYouSavedEarlier,
        'scope' => '',
    ];

    $response = $http->post(
        'http://tweeter.test/oauth/token',
        ['form_params' => $params]
    );

    $thisUsersTokens = json_decode(
        (string) $response->getBody(),
        true
    );

    // 토큰을 가지고 무엇인가 한다.
});

// 스페이스북의 routes/web.php 내부
Route::get('tweeter/redirect', function () {
    $query = http_build_query([
        'client_id' => config('tweeter.id'),
        'redirect_url' => url('tweeter/callback'),
        'response_type' => 'code',
        'scope' => 'list-clips add-delete-clips',
    ]);

    return redirect('http://tweeter.test/oauth/authorize?' . $query);
});

Route::get('/events', function () {
    if (auth()->user()->tokenCan('add-delete-clips')) {
        //
    }
});
