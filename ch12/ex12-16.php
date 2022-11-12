// 예제 12-16 잡과 큐 처리된 잡 페이크 호출

public function test_popularity_is_calculated()
{
    Bus::fake();

    // 패키지 데이터 동기화...

    // 잡이 처리됐는지 확인한다.
    Bus::assertDispatched(
        CalculatePopularity::class,
        function ($job) use ($package) {
            return $job->package->id === $package->id;
        }
    );

    // 잡이 처리되지 않았는지 확인한다.
    Bus::assertNotDispatched(DestroyPopularityMaybe::class);
}

public function test_popularity_calculation_is_queued()
{
    Queue::fake();

    // 패키지 데이터 동기화...

    // 큐에 잡을 넣었는지 확인한다.
    Queue::assertPushed(CalculatePopularity::class, function ($job) use ($package)
    {
        return $job->package->id === $package->id;
    });

    // popularity라는 이름의 큐에 잡을 넣었는지 확인한다.
    Queue::assertPushedOn('popularity', CalculatePopularity::class);

    // 잡을 두 번 넣었는지 확인한다.
    Queue::assertPushed(CalculatePopularity::class, 2);

    // 잡을 넣지 않았는지 확인한다.
    Queue::assertNotPushed(DestrotyPopularityMaybe::class);
}
