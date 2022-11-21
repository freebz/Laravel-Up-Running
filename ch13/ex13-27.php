// 예제 13-27 Bearer 토큰을 사용하면서 API 요청하기

$http = new GuzzleHttp\Client();
$response = $http->request('GET', 'http://twetwer.test/api/user', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer' . $accessToken,
    ],
]);
