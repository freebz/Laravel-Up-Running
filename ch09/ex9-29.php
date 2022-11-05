// 예제 9-29 before() 메서드로 정책 오버라이드하기

public function before($user, $ability)
{
    if ($user->isAdmin()) {
        return true;
    }
}
