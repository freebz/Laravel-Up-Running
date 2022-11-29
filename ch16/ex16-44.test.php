// 예제 16-44 테스트하는 동안 이벤트 리스너 비활성화하기

public function test_something_subscription_related()
{
    $this->withoutEvents();

    ...
}
