// 예제 12-34 생성된 더스크 페이지 클래스

<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class CreatePackage extends Page
{
    /**
     * 페이지의 URL을 조회한다.
     *
     * @return string
     */
    public function url()
    {
        return '/';
    }

    /**
     * 브라우저가 페이지에 있는지 확인한다.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * 페이지용 요소 단축키를 조회한다.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }
}
