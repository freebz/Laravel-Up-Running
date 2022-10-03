// 예제 4-39 특정 뷰에 원하는 데이터가 전달됐는지 테스트하기

// EventsTest.php
public function test_list_page_shows_all_events()
{
    $event1 = Event::factory()->create();
    $event2 = Event::factory()->create();

    $response = $this->get('events');
    $response->assertViewHas('events', Event::all());
    $response->assertViewHasAll([
        'events' => Event::all(),
        'title' => 'Events Page',
    ]);
    $response->assertViewMissing('dogs');
}
