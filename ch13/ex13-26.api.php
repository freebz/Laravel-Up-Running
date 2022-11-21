// 예제 13-26 패스포트 인증 미들웨어로 API 라우트 보호하기

// routes/api.php
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
