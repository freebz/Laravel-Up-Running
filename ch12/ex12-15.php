// 예제 12-15 이벤트에 대한 어서션 작성하기

public function test_signing_up_users_notifies_slack()
{
    Event::fake();

    // 회원가입하는 코드

    Event::assertDispatched(UserJoined::class, function ($event) use ($user) {
        return $event->user->id === $user->id;
    });

    // 혹은 여러 사용자가 가입하고 이벤트가 두 번 발생했는지 확인

    Event::assertDispatched(UserJoined::class, 2);

    // 혹은 유효성 검증에 실패하도록 회원가입을 하고 이벤트가 발생하지 않았는지 확인

    Event::assertNotDispatched(UserJoined::class);
}
