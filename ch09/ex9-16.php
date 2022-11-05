// 예제 9-16 Gate 퍼사드 기본 사용법

if (Gate::allows('update-contact', $contact)) {
    // contact 업데이트
}

// 또는
if (Gate::denies('update-contact', $contact)) {
    abort(403);
}
