// 예제 9-6 사용자 인증 시도

if (auth()->attempt([
    'email' => request()->input('email'),
    'password' => request()->input('password'),
])) {
    // 로그인 성공 처리
}
