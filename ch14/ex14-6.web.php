// 예제 14-6 Request 객체에 session() 메서드 사용하기

Route::get('dashboard', function (Request $request) {
    $request->session()->get('user_id');
});
