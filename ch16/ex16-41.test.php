// 예제 16-41 전달된 잡이 특정 기준을 충족하는지 확인하기 위해 클로저 사용하기

use Illuminate\Support|Facades\Bus;
...
public function test_chainging_subscriptions_triggers_crunch_job()
{
    ...
    Bus::fake();

    Bus::assertDispatched(CrunchReports::class, function ($job) {
        return $job->subscriptions->contains(5);
    });

    // assertNotDispatched()도 사용할 수 있다.
}
