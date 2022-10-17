// 예제 5-73 간단한 애플리케이션 테스트를 통해 데이터베이스 동작을 테스트하는 방법

public function test_active_page_shows_active_and_not_inactive_contacts()
{
    $activeContact = Contact::factory()->create();
    $inactiveContact = Contact::factory()->inactive()->create();

    // url /active-contacts로 GET 요청한 결과를 확인
    $this->get('active-contacts')
         ->assertSee($activeContact->name)
         ->assertDontSee($inactiveContact->name);
}
