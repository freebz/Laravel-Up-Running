// 예제 8-17 아티즌 명령어에 대한 입력/출력 테스트를 체이닝 형태로 표현한 코드

public function testItCreatesNewUser()
{
    $this->artisan('myapp:create-user')
         ->expectsQuestion("What's the name of the new user?", "Wilbur Powery")
         ->expectsQuestion("What's the email of the new user?", "wilbur@thisbook.co")
         ->expectsQuestion("What's the password of the new user?", "secret")
         ->expectsOutput("User Wilbur Powery created!");

    $this->assertDatabaseHas('users', [
        'email' => 'wilbur@thisbook.co'
    ]);
}
