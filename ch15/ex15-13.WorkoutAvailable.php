// 예제 15-13 WorkoutAvailable 알림 클래스

...
class WorkoutAvailable extends Notification
{
    use Queueable;

    public $workout;

    public function __construct($workout)
    {
        $this->workout = $workout;
    }

    public function via($notifiable)
    {
        // 이 메서드는 User에 존재하지 않는다... 곧 만들 것이다.
        return $notifiable->preferredNotificationChannels();
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('새 운동이 할당되었습니다!')
            ->action('지금 확인하세요.', route('workout.show', [$this->workout]))
            ->line('함께 운동하게 되어 기쁩니다.');
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
