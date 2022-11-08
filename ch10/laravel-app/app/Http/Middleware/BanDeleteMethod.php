<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BanDeleteMethod
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // 이 시점에 $request는 사용자가 보낸 날것이다.
        // 재미 삼아 무엇인가 해보자.
        if ($request->ip() === '192.168.1.1') {
            return response('금지된 IP 주소!', 403);
        }

        // DELETE 메서드 검사
        if ($request->method() === 'DELETE') {
            return response(
                "DELETE 메서드는 사용할 수 없습니다.",
                405
            );
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
