// 예제 12-23 모의 객체 인스턴스를 컨테이너에 바인딩하기

public function test_notifier_notifies_admins()
{
    $slackMock = Mockery::mock(SlackClient::class);
    $slackMock->shouldReceive('send')->once();

    app()->instance(SlackClient::class, $slackMock);

    $notifier = app(Notifier::class);
    $notifier->notifyAdmins('Test message');
}
