// 예제 14-17 stack 드라이버 맞춤 설정하기

'channels' => [
    'stack' => [
        'driver' => 'stack',
        'channels' => ['daily', 'stack'],
    ],

    'daily' => [
        'driver' => 'daily',
        'path' => storage_path('logs/laravel.log'),
        'level' => 'info',
        'days' => 14,
    ],

    'slack' => [
        'driver' => 'slack',
        'url' => env('LOG_SLACK_WEBHOOK_URL'),
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical';
    ],
],
