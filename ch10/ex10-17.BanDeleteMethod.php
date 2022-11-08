// 예제 10-17 아티즌 명령어로 만든 미들웨어 내용


class BanDeleteMethod
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
