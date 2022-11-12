// 예제 12-26 퍼사드 스파이

public function test_package_should_be_cached_after_visit()
{
    Cache::spy();

    $package = Package::factory()->create();

    $this->get(route('packages.show', [$package->id]));

    Cache::shouldHaveReceived('put')
        ->once()
        ->with('packages.' . $package->id, $package->toArray());
}
