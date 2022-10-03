// 예제 4-29 생성한 뷰 컴포저 클래스 등록하기

public function boot()
{
    view()->composer(
        'partials.sidebar',
        \App\Http\ViewComposers\RecentPostsComposer::class
    );
}
