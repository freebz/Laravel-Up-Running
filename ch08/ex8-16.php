// 예제 8-16 테스트에서 아티즌 명령어 호출

public function test_empty_log_command_empties_logs_table()
{
    DB::table('logs')->insert(['message' => 'Did something']);
    $this->assertCount(1, DB::table('logs')->get());

    $this->artisan('logs:empty'); // Artisan.call('logs:empty')와 동일하다.
    $this->assertCount(0, DB::table('logs')->get());
}
