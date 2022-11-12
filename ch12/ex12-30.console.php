// 예제 12-30 기본적인 아티즌 expects 테스트

// routes/console.php
Artisan::command('make:post {--expanded}', function () {
    $title = $this->ask('글의 제목은?');
    $this->comment('이 ' . Str::slug($title) . '.md 파일을 생성합니다.');

    $category = $this->choice('카테고리는?', ['technology', 'construction'], 0);

    // 여기에 새로운 글 생성 코드 작성

    $this->comment('글이 생성됐습니다.');
});

// 테스트 파일
public function test_make_post_console_commands_performs_as_expected()
{
    $this->artisan('make:post', ['--expanded' => true])
         ->expectsQuestion('글의 제목은?', 'My Today Learn')
         ->expectsOutput('이 my-today-i-learn.md 파일을 생성합니다.')
         ->expectsQuestion('카테고리는?', 'construction')
         ->expectsOutput('글이 생성됐습니다.')
         ->assertExitCode(0);
}
