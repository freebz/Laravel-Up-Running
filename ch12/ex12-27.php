// 예제 12-27 시간 관련 테스트 헬퍼를 이용한 현재 시각 조작

public function testTimeCanBeManipulated()
{
    // 라라벨 8 이전
    $knownDate = Carbon::create(2001, 5, 21, 12);
    Carbon::setTestNow($knownDate);

    // 라라벨 8 이후
    $this->travel(5)->days(); // 현재 시각을 5일 후로 설정
    $this->travel(-1)->weeks(); // 현재 시각을 1주일 건으로 설정
    $this->travelTo(now()->subHours(6)); // 특정 시점으로 설정
    $this->travelBack(); // 원래대로 되돌려 놓기
}
