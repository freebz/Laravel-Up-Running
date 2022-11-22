// 예제 14-7 세션 구현체 주입

Route::get('dashboard', function (Illuminate\Session\Store $session) {
    return $session->get('user_id');
});
