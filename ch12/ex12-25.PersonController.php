// 예제 12-25 퍼사드 목킹하기

// PersonController
public function index()
{
    return Cache::remember('people', function () {
        return Person::all();
    });
}

// PeopleTest
public function test_all_people_route_should_be_cached()
{
    $person = Person::factory()->create();

    Cache::shouldReceive('remember')
        ->once()
        ->andReturn(collect[$person]);

    $this->get('people')->assertJsonFragment(['name' => $person->name]);
}
