// 예제 13-39 라우트 그룹에 API 인증 미들웨어 적용하기

Route::prefix('api')->middleware('auth:api')->group(function () {
    //
});
