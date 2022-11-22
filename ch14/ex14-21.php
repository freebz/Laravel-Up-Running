// 예제 14-21 쿠키에 대해 유닛 테스트 실행하기

public function test_cookie()
{
    $this->app->resolving(EncryptCookies::class, function ($object) {
        $object->disableFor('my-cookie');
    });

    // route-echoing-my-cookie-value라는 라우트에서
    // 쿠키 값을 출력하도록 정의되어 있다고 가정한다.
    $response = $this->call(
        'get',
        'route-echoing-my-cookie-value',
        [],
        ['my-cookie' => 'baz']
    );
    $response->assertSee('baz');
}
