// 예제 10-19 HTTP DELETE 메서드를 거절하는 단순한 미들웨어

...
class BanDeleteMethod
{
    public function handle($request, Closure $next)
    {
        // DELETE 메서드 검사
        if ($request->method() === 'DELETE') {
            return response(
                "DELETE 메서드는 사용할 수 없습니다.",
                405
            );
        }

        $response = $next($request);

        // 쿠키 추가
        $response->cookie('visited-our-site', true);

        // 응답 반환
        return $response;
    }
}
