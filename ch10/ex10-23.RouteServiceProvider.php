// 예제 10-23 라우트 서비스 프로바이더의 일부 코드

// App\Providers\RouteServiceProvider
public function map()
{
    $this->mapApiRoutes();
    $this->mapWebRoutes();
}

protected function mapApiRoutes()
{
    Route::prefix('api')
        ->middleware('api')
        ->namespace($this->namespace)
        ->group(base_path('routes/api.php'));
}

protected function mapWebRoutes()
{
    Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/web.php'));
}
