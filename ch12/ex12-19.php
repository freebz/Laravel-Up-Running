// 예제 12-19 알림 채널 테스트하기

public function test_users_are_notified_by_their_preferred_channel()
{
    Notification::fake();

    $user = User::factory()->create(['slack_preferred' => true]);

    // 패키지에 평점을 부여하는 코드 실행...

    // 패키지 작성자가 슬랙으로 알림을 받았는지 확인한다.
    Notification::assertSentTo(
        $user,
        PackageRatingReceived::class,
        function ($notification, $channels) use ($package) {
            return $notification->package->id === $package->id
                && in_array('slack', $channels);
        }
    );
}
