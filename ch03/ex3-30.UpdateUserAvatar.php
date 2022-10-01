// 예제 3-30 __invoke() 메서드를 사용하는 방법

// \App\Http\Controllers\updateUserAvatar.php
public function __invoke(User $user)
{
    // 사용자의 아바타 이미지를 변경한다.
}

// routes/web.php
use App\Http\Controllers\UpdateUserAvatar;

Route::post('users/{user}/update-avatar', UpdateUserAvatar::class);
