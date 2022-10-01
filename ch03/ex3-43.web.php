// 예제 3-43 redirect()->route()에 파라미터 전달하기

Route::get('redirect', function () {
    return redirect()->route('conferences.show', ['conference' => 99]);
});
