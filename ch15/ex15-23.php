// 예제 15-23 알림이 발송됐는지 테스트하기

public function test_new_signups_triggers_admin_notification()
{
    Notification::fake();

    Notification::assertSentTo($user, NewUsersSignedUp::class,
        function ($notification, $channels) {
            return $notification->user->email == 'user-who-signed-up@gmail.com'
            && $channels == ['mail'];
    });

    // 지정된 사용자에게 이메일이 발송됐는지 확인
    Notification::assertSentTo(
        [$user],
        NewUsersSignedup::class
    );

    // assertNotSentTo()도 사용 가능
    Notification::assertNotSentTo(
        [$userDidntSignUp], NewUsersSignedup::class
    );
}
