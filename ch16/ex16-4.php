// 예제 16-4 Bus 퍼사드의 batch() 메서드로 잡 일괄 처리하기

use App\Jobs\ProcessPodcast;
use App\Models\Podcast;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Batch;
use Throable;

$batch = Bus::batch([
    new ProcessPodcast(Podcast::find(1)),
    new ProcessPodcast(Podcast::find(2)),
    new ProcessPodcast(Podcast::find(3)),
    new ProcessPodcast(Podcast::find(4)),
    new ProcessPodcast(Podcast::find(5)),
])->then(function (Batch $batch) {
    // 모든 잡이 성공적으로 완수된 경우
})->catch(function (Batch $batch, Throwable $e) {
    // 실패한 잡이 최초로 나타난 경우
})->finally(function (Batch $batch) {
    // 일괄 처리가 끝난 후
})->dispatch();

return $batch->id;
