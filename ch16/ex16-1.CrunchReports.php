// 예제 16-1 라라벨 잡 클래스의 기본적인 코드

<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CrunchReports implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * 새로운 잡 인스턴스 생성하기
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 잡 실행
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
