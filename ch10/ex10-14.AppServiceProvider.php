// 예제 10-14 커스텀 응답 매크로 만들기

...
use Illuminate\Support\Facades\Response;
class AppServiceProvider
{
    public function boot()
    {
        Response::macro('myJson', function ($content) {
            return response(json_encode($content))
                ->withHeaders(['Content-Type' => 'application/json']);
        });
    }
}
