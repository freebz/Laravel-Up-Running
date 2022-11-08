// 예제 10-4 가장 간단한 HTTP 응답

Route::get('route', function () {
    return new Illuminate\Http\Response('Hello!');
});

// 내용은 동일하지만 글로벌 함수를 이용한 방식:
Route::get('route', function () {
    return response('Hello!');
});
