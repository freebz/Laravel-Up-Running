// 예제 12-37 명령어로 생성한 더스크 컴포넌트의 기본 소스 코드

<?php

namespace Tests\Browser\Components;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Component as BaseComponent;

class RatingWidget extends BaseComponent
{
    /**
     * 컴포넌트의 루트 셀렉터를 조회한다.
     *
     * @return string
     */
    public function selector()
    {
        return '#selector';
    }

    /**
     * 브라우저가 컴포넌트를 포함하고 있는 확인한다.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertVisible($this->selector());
    }

    /**
     * 컴포넌트의 요소 단축어 목록을 반환한다.
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
