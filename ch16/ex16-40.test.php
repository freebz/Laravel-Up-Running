// 예제 16-40 특정 클래스의 잡이 전달됐는지 확인

public function test_changing_number_of_subscriptions_crunches_reports()
{
    $this->expectsJobs(\App\Jobs\CrunchReports::class);

    ...
}
