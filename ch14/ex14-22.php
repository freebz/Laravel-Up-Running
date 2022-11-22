// 예제 14-22 Log 파사드를 대상으로 어서션 만들기

// 테스트 파일
public function test_new_accounts_generate_log_entries()
{
    Log::shouldReceive('info')
        ->once()
        ->with('New account created!');

    // 새 계정을 만든다.
    $this->post('accounts.store'), ['email' => 'matt@mattstauffer.com']);
}

// AccountController
public function store()
{
    // 계정 생성

    Log::info('New account created!');
}
