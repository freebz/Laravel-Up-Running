// 예제 3-13 라우트 그룹으로 URL에 접두사 붙이기

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        // URL '/dashboard'를 처리하는 로직
    });
    Route::get('users', function () {
        // URL '/dashboard/users'를 처리하는 로직
    });
});
