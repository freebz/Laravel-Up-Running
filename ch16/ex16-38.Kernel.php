// 예제 16-38 1분마다 한 번씩 실행되도록 클로저 예약하기

// app/Console/Kernel.php
public function shecule(Schedule $schedule)
{
    $schedule->call(function () {
        CalculateTotals::dispatch();
    })->everyMinute();
}
