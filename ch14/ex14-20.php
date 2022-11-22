// 예제 14-20 이미지의 URL이 출력되는지 확인하기

public function test_user_profile_picture_echoes_correctly()
{
    $user = User::factory()->create();

    $response = $this->get(route('users.show', $user->id));

    $response->assertSee($user->picture);
}
