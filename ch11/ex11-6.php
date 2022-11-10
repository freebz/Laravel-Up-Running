// 예제 11-6 컨테이너 클로저 바인딩에서 전달받은 $app 인자 사용하기

// 이 바인딩은 기술적으로 특별할 게 아무것도 없다.
// 컨테이너의 오토와이어링으로 의존성이 다 해결되기 때문이다.
$this->app->bind(UserMailer::class, function ($app) {
    return new UserMailer(
        $app->make(Mailer::class),
        $app->make(Logger::class),
        $app->make(Slack::class)
    );
});
