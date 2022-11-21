// 예제 13-45 일반적인 API 테스트 패턴

...
class DogsApiTest extends TestCase
{
    use WithoutMiddleware, RefreshDatabase;

    public function test_it_gets_all_dogs()
    {
        $dog1 = Dog::factory()->create();
        $dog2 = Dog::factory()->create();

        $response = $this->getJson('api/dogs');

        $response->assertJsonFragment(['name' => $dog1->name]);
        $response->assertJsonFragment(['name' => $dog2->name]);
    }
}
