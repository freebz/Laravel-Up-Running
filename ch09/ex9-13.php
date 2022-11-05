// 예제 8-13 프레임워크가 생성한 인증 이벤트

protected $listen = [
    'Illuminate\Auth\Events\Registered' => [],
    'Illuminate\Auth\Events\Attempting' => [],
    'Illuminate\Auth\Events\Authenticated' => [],
    'Illuminate\Auth\Events\Login' => [],
    'Illuminate\Auth\Events\Failed' => [],
    'Illuminate\Auth\Events\Logout' => [],
    'Illuminate\Auth\Events\Lockout' => [],
    'Illuminate\Auth\Events\PasswordReset' => [],
];
