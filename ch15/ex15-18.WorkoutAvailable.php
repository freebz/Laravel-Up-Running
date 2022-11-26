// 예제 15-18 알림에 markdown() 메서드 사용하기

public function toMail($notifiable)
{
    return (new MailMessage)
        ->subject('Workout Available')
        ->markdown('emails.workout-available', ['workout' => $this->workout]);
}
