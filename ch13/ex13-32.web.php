// 예제 13-32 갱신 토큰을 이용해서 새 토큰 요청하기

// 스페이스북의 routes/web.php 내부
Route::get('tweeter/request-refresh', function (Request $request) {
    $http = new GuzzleHttp\Client;

    $params = [
        'grant_type' => 'refresh_token',
        'client_id' => config('tweeter.id'),
        'client_secret' => config('tweeter.secret'),
        'redirect_uri' => url('tweeter/callback'),
        'refresh_token' => $theTokenYouSavedEarlier,
        'scope' => '',
    ];

    $response = $http->post(
        'http://tweeter.test/oauth/token',
        ['form_params' => $params]
    );

    $thisUsersTokens = json_decode(
        (string) $response->getBody(),
        true
    );

    // 토큰을 가지고 무엇인가 한다.
});
