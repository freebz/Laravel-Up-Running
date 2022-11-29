// 예제 16-9 잡을 큐로 되돌려보내기

public function handle()
{
    ...
    if (condition) {
        $this->release($numberOfSecondsToDelayBeforeRetrying);
    }
}
