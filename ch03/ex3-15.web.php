// 예제 3-15 서브도메인을 인자로 받을 수 있도록 정의된 라우트

Route::domain('{account}.myapp.com')->group(function () {
    Route::get('/', function ($account) {
        //
    });
    Route::get('users/{id}', function ($account, $id) {
        //
    });
});
