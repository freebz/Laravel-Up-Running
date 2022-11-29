// 예제 16-39 몇 가지 예약 이벤트 샘플

// 둘 다 매주 일요일 23:50에 실행한다.
$schedule->command('do:thing')->weeklyOn(0, '23:50');
$schedule->command('do:thing')->weekly()->sundays()->at('23:50');

// 주중 아침 8시에서 오후 5시 사이에 한 시간 간격으로 실행한다.
$schedule->command('do:thing')->weekdays()->hourly()->when(function () {
    return date('H') >= 8 && date('H') <= 17;
});

// between 메서드를 사용해서 주중 아침 8시에서 오후 5시 사이에 한 시간 간격으로 실행한다.
$schedule->command('do:thing')->weekdays()->hourly()->between('8:00', '17:00');

// 매 30분마다 실행하되 SkipDetector가 하지 말라고 할 때는 건너뛴다.
$schedule->command('do:thing')->everyThirtyMinutes()->skip(function () {
    return app('SkipDetector')->shouldSkip();
});
