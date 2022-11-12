// 예제 12-18 Notification 페이크

public function test_users_are_notified_of_new_package_ratings()
{
    Notification::fake();

    // 패키지에 평점을 부여하는 코드 실행...

    // 패키지 작성자에게 알림이 갔는지 확인한다.
    Notification::assertSentTo(
        $package->author,
        PackageRatingReceived::class,
        function ($notification, $channels) use ($package) {
            return $notification->package->id === $package->id;
        }
    );

    // 지정한 사용자들에게 알림이 갔는지 확인한다.
    Notification::assertSentTo(
        [$package->collaborators], PackageRatingReceived::class
    );

    // 패키지에 평점을 다시 부여하는 코드 실행...

    // 알림이 보내지지 않았는지 확인한다.
    Notification::assertNotSentTo(
        [$package->author], PackageRatingReceived::class
    );
}
