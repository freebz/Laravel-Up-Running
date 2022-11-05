// 예제 9-12 클로저 요청 가드 정의하기

public function boot()
{
    $this->registerPolicies();

    Auth::viaRequest('token-hash', function ($request) {
        return User::where('token-hash', $request->token)->first();
    });
}
