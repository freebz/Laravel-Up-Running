// 예제 12-14 어서션 추가 없이 이벤트가 작동하지 않게 하기

public function test_controller_does_some_thing()
{
    Event::fake();

    // 슬랙에 메시지가 전송되는 것을 걱정하지 않으면서
    // 원하는 모든 코드를 테스트할 수 있다.
}
