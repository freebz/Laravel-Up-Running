// 예제 13-40 생텀을 이용해서 라우트 보호하기

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
