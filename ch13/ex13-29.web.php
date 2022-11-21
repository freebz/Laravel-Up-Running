// 예제 13-29 우리의 OAuth 서버로 사용자를 디라이렉트하는 소비자 애플리케이션

// 스페이스북의 routes/web.php 내부
Route::get('tweeter/redirect', function () {
    $query = http_build_query([
        'client_id' => config('tweeter.id'),
        'redirect_uri' => url('tweeter/callback'),
        'response_type' => 'code',
        'scope' => '',
    ]);

    // 아래와 같이 문자열을 생성
    // client_id={$client_id}&redirect_uri={$redirect_uri}&response_type=code

    return redirect('http://tweeter.test/oauth/authorize?' . $query);
});
