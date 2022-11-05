// 예제 9-17 여러 파라미터를 갖는 어빌리티

// 정의
Gate::define('add-contact-to-group', function ($user, $contact, $group) {
    return $user->id == $contact->user_id && $user->id == $group->user_id;
});

// 사용
if (Gate::denies('add-contact-to-group', [$contact, $group])) {
    abort(403);
}
