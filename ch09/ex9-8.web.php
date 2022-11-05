// 예제 9-8 auth 미들웨어로 라우트를 보호하는 예

Route::middleware('auth')->group(function () {
    Route::get('account', 'AccountController@dashboard');
});

Route::get('login', 'Auth\LoginController@getLogin')->middleware('guest');
