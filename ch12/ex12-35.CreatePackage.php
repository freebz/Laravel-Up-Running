// 예제 12-35 새로운 패키지 생성 더스크 페이지

class CreatePackage extends Page
{
    public function url()
    {
        return '/packages/create';
    }

    public function assert(Browser $browser)
    {
        $browser->assertTitleContains('Create Package');
        $browser->assertPathIs($this->url());
    }

    public function elements()
    {
        return [
            '@title' => 'input[name=title]',
            '@instructions' => 'textarea[name=instructions]',
        ];
    }
}
