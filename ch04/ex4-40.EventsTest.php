// 예제 4-40 assertViewHas() 메서드에 클로저 전달하기

// EventsTest.php
public function test_list_page_shows_all_events()
{
    $event1 = Event::factory()->create();

    $response = $this->get("events/{ $event1->id }");

    $response->assertViewHas('event', function ($event) use ($event1) {
        return $event->id === $event1->id;
    });
}
