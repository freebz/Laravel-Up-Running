// 예제 3-17 라우트 그룹의 이름 접두사 지정하기

Route::name('users.')->prefix('users')->group(function () {
    Route::name('comments.')->prefix('comments')->group(function () {
        Route::get('{id}', function () {
            // 결과적으로 이 라우트는 /users/comments/{id}의 URL 링크를 갖는
            // 'users.comments.show'라는 이름의 라우트로 등록된다.
        })->name('show');
    });
});
