// 예제 12-11 예외가 발생하는 라우트와 통과하는 테스트

// routes/web.php
Route::get('has-exceptions', function () {
    throw new Exception('Stop!');
});

// tests/Feature/ExceptionsTest.php
public function test_exception_in_route()
{
    $this->get('/has-exceptions');

    $this->assertTrue(true);
}
