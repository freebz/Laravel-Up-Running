// 예제 13-46 범위를 지정한 접근 테스트

public function test_it_lists_all_clips_for_those_with_list_clips_scope()
{
    Passport::actingAs(
        User::factory()->create(),
        ['list-clips']
    );

    $response = $this->getJson('api/clips');
    $response->assertStatus(200);
}
