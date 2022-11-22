// 예제 14-11 요청 객체에서 쿠키 읽기

Route::get('dashboard', function (Illuminate\Http\Request $request) {
    $userDismissedPopup = $request->cookie('dismissed-popup', false);
});
