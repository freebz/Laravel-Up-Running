// 예제 15-12 자동 생성된 알림 클래스

<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class WorkoutAvailable extends Notification
{
    use Queueable;

    /**
     * 새로운 알림 인스턴스 생성하기
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 알림을 조회할 채널 가져오기
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * 알림을 메일 형식으로 가져오기
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('알림 안내')
                    ->action('알림 실행', url('/'))
                    ->line('우리 앱을 사용해주셔서 감사합니다!');
    }

    /**
     * 알림을 배열 형식으로 가져오기
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
