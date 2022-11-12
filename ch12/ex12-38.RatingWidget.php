// 예제 12-38 평가 위젯용 더스크 컴포넌트

class RatingWidget extends BaseComponent
{
    public function selector()
    {
        return '.rating-widget';
    }

    public function assert(Browser $browser)
    {
        $browser->assertVisible($this->selector());
    }

    public function elements()
    {
        return [
            '@5-star' => '.five-star-rating',
            '@4-star' => '.four-star-rating',
            '@3-star' => '.three-star-rating',
            '@2-star' => '.two-star-rating',
            '@1-star' => '.one-star-rating',
            '@average' => '.average-rating',
            '@mine' => '.current-user-rating',
        ];
    }

    public function ratePackage(Browser $browser, $rating)
    {
        $browser->click("@{$rating}-star")
                ->assertSeeIn('@mine', $rating);
    }
}
