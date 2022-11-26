// 예제 15-22 메일러블 어서션 작성하기

public function test_signup_triggers_welcome_email()
{
    Mail::fake();

    Mail::assertSent(WelcomeEmail::class, function ($mail) {
        return $mail->subject == 'Welcome!';
    });

    // assertSentTo()로 수신자도 테스트할 수 있고
    // assertNotSent()로 메일이 보내지지 않았는지 테스트할 수 있다.
}
