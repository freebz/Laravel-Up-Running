// 예제 16-16 EventServiceProvider에서 이벤트와 리스너 연결하기

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        \App\Events\UserSubscribed::class => [
            \App\Listeners\EmailOwnerAboutSubscription::class,
        ],
    ];
}
