// 예제 9-5 Auth::routes()가 제공하는 라우트

// 인증 라우트
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// 회원가입 라우트
$this->get('register', 'Auth\RegisterController@showRegistrationForm')
     ->name('register');
$this->post('register', 'Auth\RegisterController@register');

// 비밀번호 재설정 라우트
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')
     ->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')
     ->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')
     ->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

// 이메일 검증이 활성화된 경우
$this->get('email/verify', 'Auth\VerificationController@show')
     ->name('verification.notice');
$this->get('email/verify/{id}', 'Auth\VerificationController@verify')
     ->name('verification.verify');
$this->get('email/resend', 'Auth\VerificationController@resend')
     ->name('verification.resend');
