// 예제 10-24 파라미터를 받는 라우트 미들웨어 정의하기

public function handle($request, $next, $role)
{
    if (auth()->check() && auth()->user()->hasRole($role)) {
        return $next($request);
    }

    return redirect('login');
}
