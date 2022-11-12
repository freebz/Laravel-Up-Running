// 예제 12-31 간단한 더스크 테스트

public function testBasicExample()
{
    $user = User::factory()->create();

    $this->browse(function ($browser) use ($user) {
        $browser->visit('login')
                ->type('email', $user->email)
                ->type('password', 'secret')
                ->press('Login')
                ->assertPathIs('/home');
    });
}
