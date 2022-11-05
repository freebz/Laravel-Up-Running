// 예제 9-28 정책에 대응하여 권한 확인하기

// 게이트
if (Gate::denies('update', $contact)) {
    abort(403);
}

// 명시적인 인스턴스가 없을 때의 게이트
if (! Gate::check('create', Contact::class)) {
    abort(403);
}

// User
if ($user->can('update', $contact)) {
    // 무엇인가 수행한다.
}

// 블레이드
@can('update', $contact)
    // 여기 있는 내용을 보여준다.
@endcan
