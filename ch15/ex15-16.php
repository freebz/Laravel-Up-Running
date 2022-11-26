// 예제 15-16 Notifiable 트레이트를 사용해서 알림 보내기

use App\Notifications\WorkoutAvailable;
...
$user->notify(new WorkoutAvailable($workout));
