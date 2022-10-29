// 예제 8-8 아티즌 명령어에서 입력 값을 조회하는 방법

public function handle()
{
    // 명령어의 이름을 포함한 모든 인자를 배열로 조회한다.
    $arguments = $this->arguments();

    // 'userId' 인자의 값만 조회한다.
    $userId = $this->argument('userId');

    // 기본값을 포함한 모든 인자를 배열로 조회한다.
    $options = $this->options();

    // 'sendEmail' 옵션 값만 조회한다.
    $sendEmail = $this->option('sendEmail');
}
