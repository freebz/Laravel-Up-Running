// 예제 16-17 이벤트 구독자의 예

<?php

namespace App\Listeners;

class UserEventSubscriber
{
    public function onUserSubscription($event)
    {
        // UserSubscribed 이벤트를 처리한다.
    }

    public function onUserCancellation($event)
    {
        // UserCanceled 이벤트를 처리한다.
    }

    public function subscribe($events)
    {
        $events->listen(
            \App\Events\UserSubscribed::class,
            'App\Listeners\UserEventSubscriber@onUserSubscription'
        );

        $events->listen(
            \App\Events\UserCanceled::class,
            'App\Listeners\UserEventSubscriber@onUserCancellation'
        );
    }
}
