// 예제 12-3 실패하도록 수정된 tests/Feature/FailingTest.php

public function testExample()
{
    $response = $this->get('/');

    $response->assertStatus(301);
}
