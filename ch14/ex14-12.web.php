// 예제 14-12 응답 객체에 쿠키 설정하기

Route::get('dashboard' function () {
    $cookie = cookie('saw-dashboard', true);

    return Response::view('dashboard')
        ->cookie($cookie);
});
