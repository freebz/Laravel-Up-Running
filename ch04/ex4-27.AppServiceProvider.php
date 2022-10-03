// 예제 4-27 클로저를 사용해 특정 뷰에 변수를 공유하기

view()->composer('partials.sidebar', function ($view) {
    $view->with('recentPosts', Post::recent());
});
