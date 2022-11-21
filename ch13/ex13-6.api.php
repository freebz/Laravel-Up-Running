// 예제 13-6 라라벨에서 요청 헤더 읽기

Route::get('dogs', function (Request $request) {
    var_dump($request->header('Accept'));
});
