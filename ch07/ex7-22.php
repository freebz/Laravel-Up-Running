// 예제 7-22 유효한 요청이 성공적으로 수행되는 시나리오 테스트

public function test_valid_input_should_create_a_post_in_the_database()
{
    $this->post('posts', ['title' => 'Post Title', 'body' => 'This is the body']);
    $this->assertDatabaseHas('posts', ['title' => 'Post Title']);
}
