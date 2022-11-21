// 예제 13-38 토큰 스코프에 기반해서 접근을 제한하기 위해 미들웨어 사용하기

// routes/api.php
Route::get('clips', function () {
    // 액세스 토큰이 'list-clips'와 'add-delete-clips' 스코프 둘 다 가지고 있다.
})->middleware('scopes:list-clips,add-delete-clips');

// 또는

Route::get('clips', function () {
    // 액세스 토큰이 나열된 스코프 중 하나를 가지고 있다.
})->middleware('scope:list-clips,add-delete-clips');
