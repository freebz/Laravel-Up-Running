// 예제 16-19 여러 채널로 브로드캐스트하는 이벤트

...
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserSubscribed implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $plan;

    public function __construct($user, $plan)
    {
        $this->user = $user;
        $this->plan = $plan;
    }

    public function broadcastOn()
    {
        // 문자열을 사용하는 문법
        return [
            'users.' . $this->user->id,
            'admins'
        ];

        // Channel 객체를 사용하는 문법
        return [
            new Channel('users.', $this->user->id),
            new Channel('admins'),
            // 비공개 채널인 경우: new PrivateChannel('admins'),
            // 프레젠스 채널인 경우: new PresenceChannel('admins'),
        ];
    }
}
