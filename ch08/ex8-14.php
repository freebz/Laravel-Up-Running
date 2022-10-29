// 예제 8-14 특정 아티즌 명령어 클래스에서 다른 아티즌 명령어를 호출하는 예제

public function handle()
{
    $this->callSilent('password:reset', [
        'userId' => 15,
    ]);
}
