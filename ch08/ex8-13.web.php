// 예제 8-13 일반적인 코드에서 아티즌 명령어를 호출하는 예제

Route::get('test-artisan', function () {
    $exitCode = Artisan::call('password:reset', [
        'userId' => 15,
        '--sendEmail' => true,
    ]);
});
