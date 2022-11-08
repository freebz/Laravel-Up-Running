// 예제 10-13 플래시 데이터와 함께 리다이렉트하기

Route::post('contacts', function () {
    // contact 저장

    return redirect('dashboard')->with('message', 'Contact created!');
});

Route::get('dashboard', function () {
    // 세션에서 플래시된 데이터를 조회--주로 블레이드 템플릿에서 처리된다.
    echo session('message');
});
