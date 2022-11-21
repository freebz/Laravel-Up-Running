// 예제 13-7 페이지 처리된 API 라우트

Route::get('dogs', function () {
    return Dog::paginate(20);
});
