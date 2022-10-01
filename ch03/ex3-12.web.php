// 예제 3-12 특정 라우트를 스로틀 미들웨어로 접속 제한하기

Route::middleware(['throttle:uploads'])->group(function () {
    Route::post('/photos', function () {
        //
    });
});
