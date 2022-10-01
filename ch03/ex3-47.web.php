// 예제 3-47 403 Forbidden(권한 없음) 중단 처리

Route::post('something-you-cant-do', function (Illuminate\Http\Request $request) {
    abort(403, '접속 권한이 없습니다!');
    abort_unless($request->has('magicToken'), 403);
    abort_if($request->user()->isBanned, 403);
});
