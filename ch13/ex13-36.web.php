// 예제 13-36 특정 스코프에 접근하는 권한 요청하기

// 스페이스북의 routes/web.php 내부
Route::get('tweeter/redirect', function () {
    $query = http_build_query([
        'client_id' => config('tweeter.id'),
        'redirect_url' => url('tweeter/callback'),
        'response_type' => 'code',
        'scope' => 'list-clips add-delete-clips',
    ]);

    return redirect('http://tweeter.test/oauth/authorize?' . $query);
});
