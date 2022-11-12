// 예제 12-13 데이터베이스 테스트 예제

public function test_create_package_page_stores_package()
{
    $this->post(route('packages.store'), [
        'name' => 'Package-a-tron',
    ]);

    $this->assertDatabaseHas('packages', ['name' => 'Package-a-tron']);
}
