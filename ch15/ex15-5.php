// 예제 15-5 템플릿 변수 커스터마이징

public function build()
{
    return $this->subject('새 운동이 도착했습니다!')
                ->view('emails.assignment')
                ->with(['assignment' => $this->event->name]);
}
