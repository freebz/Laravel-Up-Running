// 예제 12-39 더스크 컴포넌트 사용하기

$browser->visit('/packages/tightenco/nova-stock-picker')
        ->within(new RatingWidget, function ($browser) {
            $borwser->ratePackage(2);
            $browser->assertSeeIn('@average', 2);
        });
