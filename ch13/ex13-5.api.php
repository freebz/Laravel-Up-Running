// 예제 13-5 라라벨에서 응답 헤더 추가하기

Route::get('dogs', function () {
    return response(Dog::all())
        ->header('X-Greatness-Index', 12);
});
