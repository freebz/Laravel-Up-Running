// 예제 16-5 일괄 처리할 잡에 Illuminate\Bus\Batchable 트레이트를 추가하기

<?php

namespace App\Jobs;

use App\Models\Podcast;
use App\Services\AudioProcessor;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessPodcast implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * 잡 실행
     *
     * @return void
     */
    public function handle()
    {
        if ($this->batch()->cancelled()) {
            // 일괄 처리가 취소된 경우

            return;
        }

        // 잡 실행
    }
}
