// 예제 3-6 라우트 파라미터 옵션

Route::get('users/{id?}', function ($id = 'fallbackId') {
    //
});
