// 예제 3-11 로그인한 사용자만 접근하게 지정한 라우트 그룹

Route::middleware('auth')->group(function() {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::get('account', function () {
        return view('account');
    });
});
