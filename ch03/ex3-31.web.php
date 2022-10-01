// 예제 3-31 개별 라우트에서 리소스 획득하기

Route::get('conferences/{id}', function ($id) {
    $conference = Conference::findOrFail($id);
});
