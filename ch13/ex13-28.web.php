// 예제 13-28 비밀번호 승인 방식으로 요청하기

// API를 사용하는 애플리케이션의 Routes/web.php 내부
Route::get('tweeter/password-grant-auth', function () {
    $http = new GuzzleHttp\Client;

    // 패스포트를 사용해 만든 OAuth 서비인 'Tweeter'에 요청을 보낸다.
    $response = $http->post('http://tweeter.test/oauth/token', [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => config('tweeter.id'),
            'client_secret' => config('tweeter.secret'),
            'username' => 'matt@mattstauffer.co',
            'password' => 'my-tweeter-password',
            'scope' => '',
        ],
    ]);

    $thisUsersTokens = json_decode((string) $response->getBody(), true);
    // 토큰을 가지고 필요한 작업을 처리한다.
});
