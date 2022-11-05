// 예제 9-31 인가 규칙 테스트하기

public function test_non_admins_cant_create_users()
{
    $user = User::factory()->create([
        'admin' => false;
    ]);
    $this->be($user);

    $this->post('users', ['email' => 'my@email.com']);

    $this->assertDatabaseMissing('users', [
        'email' => 'my@email.com',
    ]);
}
