// 예제 9-7 remember me 체크박스 값을 함께 사용한 사용자 인증 시도

if (auth()->attempt([
    'email' => request()->input('email'),
    'password' => request()->input('password'),
], request()->filled('remember'))) {
    // 로그인 성공 처리
}
