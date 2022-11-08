// 예제 10-5 HTTP 상태 코드와 헤더를 변경한 간단한 HTTP 응답

Route::get('route', function () {
    return response('Error!', 400)
        ->header('X-Header-Name', 'header-value')
        ->cookie('cookie-name', 'cookie-value');
});
