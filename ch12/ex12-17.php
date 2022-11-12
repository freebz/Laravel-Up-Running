// 예제 12-17 이메일 어서션 작성하기

public function test_package_authors_receive_launch_emails()
{
    Mail::fake();

    // 새로운 패키지를 오픈하는 코드 실행(이메일 발송)

    // 주어진 메일 주소로 메시지가 보내졌는지 확인
    Mail::assertSent(PackageLaunched::class, function ($mail) use ($package) {
        return $mail->package->id === $package->id;
    });

    // 정확한 주소로 메시지가 보내졌는지 주어진 메일 인스턴스가 확인
    Mail::assertSent(PackageLaunched::class, function ($mail) use ($package) {
        return $mail->hasTo($package->author->email) &&
            $mail->hasCc($package->collaborators) &&
            $mail->hasBcc('admin@novapackages.com');
    });

    // 새로운 패키지를 오픈하는 코드를 두 번 실행(이메일 발송 두 번)

    // 해당 메일러블 객체(메일)가 두 번 보내졌는지 확인
    Mail::assertSent(PackageLaunched::class, 2);

    // 해당 메일러블 객체(메일)가 보내지지 않았는지 확인
    Mail::assertNotSent(PackageLaunchFailed::class);
}
