// 예제 15-9 생성된 마크다운 메일러블

class AssignmentCreated extends Mailable
{
    // ...

    public function build()
    {
        return $this->markdown('emails.assignment-created');
    }
}
