// 예제 9-14 기본 Gate 퍼사드 사용법

if (Gate::denies('edit-contact', $contact)) {
    abort(403);
}

if (! Gate::allows('create-contact', Contact::class)) {
    abort(403);
}
