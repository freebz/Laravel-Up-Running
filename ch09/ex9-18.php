// 예제 9-18 Gate에 사용자 지정하기

if (Gate::forUser($user)->denies('create-context')) {
    abort(403);
}
