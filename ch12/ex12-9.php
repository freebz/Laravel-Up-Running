// 예제 12-9 테스트에서 단순한 postJSON() 사용하기

public function test_the_api_route_stores_new_packages()
{
    $response = $this->postJSON(route('api.packages.store'), [
        'name' => 'The greatest package',
    ], ['X-API-Version' => '17']);

    $response->assertOk();
}
