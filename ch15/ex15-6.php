// 예제 15-6 기본 SwiftMessage 객체 변경하기

public function build()
{
    return $this->subject('반갑습니다!')
                ->withSwiftMessage(function ($swift) {
                    $swift->setReplyTo('noreply@email.com');
                })
                ->view('emails.welcome');
}
