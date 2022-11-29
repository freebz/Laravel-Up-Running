// 예제 16-8 실패한 잡을 처리하기 위한 글로벌 핸들러 등록하기

// 어떤 서비스 프로바이더
use Illuminate\Support\Facades\Queue;
use Illuminate\Queue\Events\JobFailed;
...
    public function boot()
    {
        Queue::failing(function (JobFailed $event) {
            // $event->connectionName
            // $event->job
            // $event->exception
        });
    }
