// 예제 13-30 예시용 소비자 애플리케이션의 인가 콜백 라우트

// 스페이스북의 routes/web.php 내부
Route::get('tweeter/callback', function (Request $request) {
    if ($request->has('error')) {
        // 에러 처리
    }

    $http = new GuzzleHttp\Client;

    $response = $http->post('http://tweeter.test/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => config('tweeter.id'),
            'client_secret' => config('tweeter.secret'),
            'redirect_uri' => url('tweeter/callback'),
            'code' => $request->code,
        ],
    ]);

    $thisUsersTokens = json_decode((string) $response->getBody(), true);
    // 토큰을 가지고 무엇인가 한다.
});
