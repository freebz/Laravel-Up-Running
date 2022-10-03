// 예제 4-26 변수를 전역으로 공유하기

// 서비스 공급자의 boot 메서드
public function boot()
{
    ...
    view()->share('recentPosts', Post::recent());
}
