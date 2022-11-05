// 예제 9-32 응답 코드를 확인해서 인가 규칙 테스트하기

public function test_non_admins_cant_create_users()
{
    $user = User::factory()->create([
        'admin' => false,
    ]);
    $this->be($user);

    $response = $this->post('users', ['email' => 'my@email.com']);

    $response->assertStatus(403);
}
