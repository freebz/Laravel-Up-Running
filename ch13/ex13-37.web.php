// 예제 13-37 사용자가 인증에 사용한 토큰이 특정 행위를 수행할 수 있는 권한이 있는지 확인하기

Route::get('/events', function () {
    if (auth()->user()->tokenCan('add-delete-clips')) {
        //
    }
});
