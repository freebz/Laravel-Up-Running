// 예제 13-31 토큰 갱신 기간 정의하기

// AuthServiceProvider의 boot() 메서드
public function boot()
{
    $this->registerPolicies();

    Passport::routes();

    // 토큰이 갱신이 필요하기 전에 얼마나 오래 유지되는지
    Passport::tokensExpireIn(
        now()->addDays(15)
    );

    // 갱신 토큰이 다시 인증 받기 전에 얼마나 오래 유지되는지
    Passport::refreshTokensExpireIn(
        now()->addDays(30)
    );
}
