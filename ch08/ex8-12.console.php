// 예제 8-12 클로저 기반의 아티즌 명령어 정의 예제

// routes/console.php
Artisan::command(
    'password:reset {userId} {--sendEmail}',
    function ($userId, $sendEmail) {
        User::find($userId);
        // 로직 입력 ...
    }
);
