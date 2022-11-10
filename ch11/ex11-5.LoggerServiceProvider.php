// 예제 11-5 기본적인 컨테이너 바인딩

// 어떤 서비스 프로바이더 내에서 (아마도 LoggerServiceProvider)
public function register()
{
    $this->app->bind(Logger::class, function ($app) {
        return new Logger('/log/path/here', 'error');
    });
}
