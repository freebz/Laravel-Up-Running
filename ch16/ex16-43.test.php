// 예제 16-43 발생한 이벤트가 특정 기준을 충족하는지 확인하기 위해 클로저 사용하기

use Illuminate\Support\Facades\Event;
...
public function test_usersubscribed_event_fires()
{
    Event::fake();

    ...

    Event::assertDispatched(UserSubscribed::class, function ($e) {
        return $e->user->email = 'user-who-subscribed@mail.com';
    });

    // assertNotDispatched()를 사용할 수도 있다.
}
