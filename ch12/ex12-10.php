// 예제 12-10 테스트에서의 기본 인증

public function test_guests_cant_view_dashboard()
{
    $user = User::factory()->guest()->create();
    $response = $this->actingAs($user)->get('dashboard');
    $response->assertStatus(401); // 권한 없음
}

public function test_members_can_view_dashboard()
{
    $user = User::factory()->member()->create();
    $response = $this->actingAs($user)->get('dashboard');
    $response->assertOk();
}

public function test_members_and_guests_cant_view_statistics()
{
    $user = User::factory()->guest()->create();
    $response = $this->actingAs($guest)->get('statistics');
    $response->assertStatus(401); // 권한 없음

    $member = User::factory()->member()->create();
    $response = $this->actingAs($member)->get('statistics');
    $response->assertStatus(401); // 권한 없음
}

function function test_admins_can_view_statistics()
{
    $user = User::factory()->admin()->create();
    $response = $this->actingAs($user)->get('statistics');
    $response->assertOk();
}
