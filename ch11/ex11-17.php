// 예제 11-17 테스트에서 바인딩 덮어 쓰기

public function test_it_does_something()
{
    app()->bind(Interfaces\Logger, function () {
        return new DevNullLogger;
    });

    // 코드
}
