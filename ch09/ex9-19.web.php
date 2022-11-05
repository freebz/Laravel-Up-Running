// 예제 9-19 Authorized 미들웨어 사용하기

Route::get('people/create', function () {
    // 인물을 생성한다.
})->middleware('can:create-person');

Route::get('people/{person}/edit', function () {
    // 인물을 수정한다.
})->middleware('can:edit,person');
