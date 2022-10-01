// 예제 3-41 redirect()->to()

Route::get('redirect', function () {
    return redirect()->to('home');

    // 또는 동일한 동작을 다음과 같이 사용할 수도 있다.

    return redirect('home');

    // URL /home으로 리다이렉트 하라는 의미가 된다.
});
