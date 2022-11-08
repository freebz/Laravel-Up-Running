// 예제 10-18 미들웨서 호출 프로세스 의사코드 설명

...
class BanDeleteMethod
{
    public function handle($request, Closure $next)
    {
        // 이 시점에 $request는 사용자가 보낸 날것이다.
        // 재미 삼아 무엇인가 해보자.
        if ($request->ip() === '192.168.1.1') {
            return response('금지된 IP 주소!', 403);
        }

        // 요청을 받아들이기로 결정했다. 스택에 있는 다음 미들웨어로 넘겨보자.
        // $next()로 넘긴다. $next()가 반환하는 것은 응답인데,
        // $request가 미들웨어 스택을 따라 내려가 주요 로직에 전달된 다음
        // 반환된 응답이 다시 미들웨어 스택을 거쳐온다.
        $response = $next($request);

        // 이 시점에 사용자에게 반환되기 직전인 응답에
        // 다시 한번 추가적인 작업을 처리할 수 있다.
        $response->cookie('visited-our-site', true);

        // 마지막으로 최종 사용자에게 응답을 보낸다.
        return $response;
    }
}
