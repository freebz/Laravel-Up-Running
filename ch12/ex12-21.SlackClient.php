// 예제 12-21 라라벨에서 목커리 사용하기

// app/SlackClient.php
class SlackClient
{
    // ...

    public function send($message, $channel)
    {
        // 실제로 슬랙에 메시지를 보낸다.
    }
}

// app/Notifier.php
class Notifier
{
    private $slack;

    public function __construct(SlackClient $slack)
    {
        $this->slack = $slack;
    }

    public function notifyAdmins($message)
    {
        $this->slack->send($message, 'admins');
    }
}

// tests/Unit/NotifierTest.php
public function test_notifier_notifies_admins()
{
    $slackMock = Mockery::mock(SlackClient::class)->shouldIgnoreMissing();

    $notifier = new Notifier($slackMock);
    $notifier->notifyAdmins('Test message');
}
