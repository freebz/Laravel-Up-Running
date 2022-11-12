// 예제 12-24 라라벨 5.8 이상에서 목커리 인스턴스를 바인딩하는 더 쉬운 방법

$this->mock(SlackClient::class, function ($mock) {
    $mock->shouldReceive('send')->once();
});
