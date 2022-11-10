// 예제 11-8 이미 존재하는 인스턴스를 컨테이너에 바인딩하기

public function register()
{
    $logger = new Logger('\log\path\here', 'error');
    $this->app->instance(Logger::class, $logger);
}
