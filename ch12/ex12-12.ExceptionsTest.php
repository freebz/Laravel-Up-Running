// 예제 12-12 단일 테스트에서 일시적으로 예외 핸들러 비활성화하기

// tests/Feature/ExceptionsTest.php
public function test_exception_in_route()
{
    // 테스트 코드에서 예외 처리를 비활성화한다.
    $this->withoutExceptionHandling();

    $this->get('/has-exceptions');

    $this->assertTrue(true);
}
