// 예제 14-9 캐시 인스턴스 주입하기

Route::get('users', function (Illuminate\Contracts\Cache\Repository $cache) {
    return $cache->get('users');
});
