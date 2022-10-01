// 예제 3-49 간단한 POST 라우트 테스트 작성하기

// tests/Feature/AssignmentTest.php
public function test_post_creates_new_assigment()
{
    $this->post('/assignments', [
        'title' => 'My great assignment',
    ]);

    $this->assertDatabaseHas('assigments', [
        'title' => 'My great assignment',
    ]);
}
