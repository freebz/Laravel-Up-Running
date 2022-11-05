// 예제 9-25 before()로 Gate 권한 확인 오버라이드하기

Gate::before(function ($user, $ability) {
    if ($user->isOwner()) {
        return true;
    }
});
