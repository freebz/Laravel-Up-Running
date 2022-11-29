// 예제 16-21 브로드캐스트 이벤트 데이터를 원하는 대로 변경하기

public function broadcastWith()
{
    return [
        'userId' => $this->user->id,
        'plan' => $this->plan
    ];
}
