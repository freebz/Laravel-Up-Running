// 예제 16-15 이벤트 리스너의 예

...
use App\Mail\UserSubscribed as UserSubscribedMessage;

class EmailOwnerAboutSubscription
{
    public function handle(UserSubscribed $event)
    {
        Log::info('새로운 사용자에 대한 이메일을 운영자에게 발송했다: ' . $event->user->email);

        Mail::to(config('app.owner-email'))
            ->send(new UserSubscribedMessage($event->user, $event->plan));        
    }
}
