// 예제 16-6 잡이 이전에 몇 차례 시도 됐는지 확인하기

public function handle()
{
    ...
    if ($this->attempts() > 3) {
        //
    }
}
