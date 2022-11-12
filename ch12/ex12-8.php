// 예제 12-8 테스트에서 단순한 post() 사용

// 라우트 packages.store가 미리 정의되어 있다고 가정한다.
public function test_it_stores_new_packages()
{
    $response = $this->post(route('packages.store'), [
        'name' => 'The greatest package',
    ]);

    $response->assertOk();
}
