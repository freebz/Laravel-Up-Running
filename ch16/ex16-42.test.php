// 예제 16-42 특정 클래스의 이벤트가 발생했는지 확인

public function test_usersubscribed_event_files()
{
    $this->expectsEvents(\App\Events\UserSubscribed::class);

    ...
}
