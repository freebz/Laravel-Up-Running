// 예제 12-28 간단한 아티즌 테스트

public function test_promote_console_command_promotes_user()
{
    $user = User::factory()->create();

    $this->artisan('user:promote', ['userId' => $user->id]);

    $this->assertTrue($user->isPromoted());
}
