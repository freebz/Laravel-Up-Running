// 예제 16-11 이벤트를 발생시키는 세 가지 방법

Event::fire(new UserSubscribed($user, $plan));
// 또는
$dispatcher = app(Illuminate\Contracts\Events\Dispatcher::class);
$dispatcher->fire(new UserSubscribed($user, $plan));
// 또는
event(new UserSubscribed($user, $plan));
