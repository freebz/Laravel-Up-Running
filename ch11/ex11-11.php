// 예제 11-11 상황에 따른 바인딩하기

// 서비스 프로바이더 안에서
public function register()
{
    // FileWrangler 클래스에서 의존성 해결할 경우 SysLog 반환
    $this->app->when(FileWrangler::class)
              ->needs(Interfaces\Logger::class)
              ->give(Loggers\Syslog::class);

    // SendWelcomeEmail 클래스에서 의존성 해결할 경우 PaperTrail 반환
    $this->app->when(Jobs\SendWelcomeEmail::class)
              ->needs(Interfaces\Logger::class)
              ->give(Loggers\PaperTrail::class);
}
