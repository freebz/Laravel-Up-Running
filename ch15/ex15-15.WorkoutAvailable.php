// 예제 15-15 사용자마다 via() 메서드 맞춤 설정하기

public function via($notifiable)
{
    return $notifiable->preferred_notification_channel;
}
