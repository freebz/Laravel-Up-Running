// 예제 4-38 뷰의 렌더링 결과에 특정 문자열이 포함되어 있는지 테스트하기

// EventsTest.php
public function test_list_page_shows_all_events()
{
    $event1 = Event::factory()->create();
    $event2 = Event::factory()->create();

    $this->get('events')
         ->assertSee($event1->title)
         ->assertSee($event2->title);
}
