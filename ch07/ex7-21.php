// 예제 7-21 유효하지 않은 요청이 거부되는 시나리오 테스트

public function test_input_missing_a_title_is_rejected()
{
    $response = $this->post('posts', ['body' => 'This is the body of my post']);
    $response->assertRedirect();
    $response->assertSessionHasErrors();
}
