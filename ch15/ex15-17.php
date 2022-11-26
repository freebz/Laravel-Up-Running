// 예제 15-17 Notification 퍼사드를 이용해서 알림 보내기

use App\Notifications\WorkoutAvailable;
...
Notification::send($user, new WorkoutAvailable($workout));
