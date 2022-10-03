// 예제 4-25 모든 라우트에서 사이드바 데이터 전달하기

Route::get('home', function () {
    return view('home')
        ->with('posts', Post::recent());
});

Route::get('about', function () {
    return view('about')
        ->with('posts', Post::recent());
});
