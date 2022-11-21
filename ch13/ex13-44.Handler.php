// 예제 13-44 '찾지 못함' 예외를 포착했을 때 대체 라우트 호출하기

// App\Exceptions\Handler
public function render($request, Exception $exception)
{
    if ($exception instanceof ModelNotFoundException && $request->isJson()) {
        return Route::respondWithRoute('api.fallback.404');
    }

    return parent::render($request, $exception);
}
