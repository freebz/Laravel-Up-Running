// 예제 13-42 api 미들웨어 그룹에 생텀 미들웨어 추가하기

use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

'api' => [
    EnsuereFrontendRequestsAreStateful::class,
    'throttle:60,1',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],
