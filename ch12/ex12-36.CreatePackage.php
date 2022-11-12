// 예제 12-36 커스텀 페이지 메서드 정의 및 사용

class CreatePackage extends Page
{
    // ... url(), assert(), elements()

    public function fillBasicFields(Browser $browser, $packageTitle = 'Best package')
    {
        $browser->type('@title', $packageTitle)
                ->type('@instructions', 'Do this stuff and then that stuff');
    }
}

$browser->visit(new CreatePackage)
        ->fillBasicFields('Greatest Package Ever')
        ->press('Create Package')
        ->assertSee('Greatest Package Ever');
