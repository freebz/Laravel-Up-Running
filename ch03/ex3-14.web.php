// 예제 3-14 서브도메인 라우팅

Route::domain('api.myapp.com')->group(function () {
    Route::get('/', function () {
        //
    });
});
