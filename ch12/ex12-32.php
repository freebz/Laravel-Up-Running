// 예제 12-32 다중 더스크 브라우저

$this->browse(function ($first, $second) {
    $first->loginAs(User::find(1))
          ->visit('home')
          ->waitForText('Message');

    $second->loginAs(User::find(2))
           ->visit('home')
           ->waitForText('Message')
           ->type('message', 'Hey Taylor')
           ->press('Send');

    $first->waitForText('Hey Taylor')
          ->assertSee('Jeffrey Way');
});
