// 예제 3-40 리다이렉트를 수행하는 여러 방법

// 글로벌 헬퍼 함수를 사용하여 리다이렉트 응답 객체를 생성하는 방법
Route::get('redirect-with-helper', function () {
    return redirect()->to('login');
});

// 글로벌 헬퍼 함수를 짧게 활용하는 방법
Route::get('redirect-with-helper-shortcut', function () {
    return redirect('login');
});

// 퍼사드를 사용하여 리다이렉트 응답 객체를 생성하는 방법
Route::get('redirect-with-facade', function () {
    return Redirect::to('login');
});

// Route::redirect() 메서드를 사용하는 방법
Route::redirect('redirect-by-route', 'login');
