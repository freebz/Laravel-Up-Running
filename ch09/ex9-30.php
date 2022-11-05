// 예제 9-30 애플리케이션 테스트에서 사용자로 인증하기

public function test_it_creates_a_new_contact()
{
    $user = User::factory()->create();
    $this->be($user);

    $this->post('contacts', [
        'email' => 'my@email.com',
    ]);

    $this->assertDatabaseHas('contacts', [
        'email' => 'my@email.com',
        'user_id' => $user->id,
    ]);
}
