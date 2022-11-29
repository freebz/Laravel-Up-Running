// 예제 16-22 브로드캐스트 큐를 사용하지 않게 하기

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class UserSubscribed implements ShouldBroadcastNow
{
    //
}
