// 예제 10-22 미들웨어를 라우트 정의에 사용하기

// 라우트 GET 메서드에는 미들웨어가 동작하지 않는다...
Route::get('contacts', 'ContactController@index')->middleware('ban-delete');

// 다음과 같이 그룹 기능에 적용하기에 좋다.
Route::prefix('api')->middleware('ban-delete')->group(function () {
    // API 관련 모든 라우트
});
