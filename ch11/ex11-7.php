// 예제 11-7 컨테이너에 싱글턴 바인딩하기

public function register()
{
    $this->app->singleton(Logger::class, function () {
        return new Logger('\log\path\here', 'error');
    });
}
