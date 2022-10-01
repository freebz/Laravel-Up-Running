// 예제 3-50 간단한 GET 라우트 테스트 작성하기

// AssignmentTest.php
public function test_list_page_shows_all_assignment()
{
    $assignment = Assignment::create([
        'title' => 'My great assigment',
    ]);

    $this->get('/assigments')
         ->assertSee('My great assigment');
}
