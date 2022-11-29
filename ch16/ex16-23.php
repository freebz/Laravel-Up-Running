// 예제 16-23 이벤트를 브로드캐스트하는 조건 정의하기

public function broadcastWhen()
{
    // 백악관에서 회원가입한 경우에만 알리기
    return Str::contains($this->user->email, 'whitehouse.gov');
}
