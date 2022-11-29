// 예제 16-14 라라벨 이벤트 리스너 기본 템플릿

<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailOwnerAboutSubscription
{
    /**
     * 이벤트 리스너 생성하기
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 이벤트 처리하기
     *
     * @param  UserSubscribed  $event
     * @return void
     */
    public function handle(UserSubscribed $event)
    {
        //
    }
}
