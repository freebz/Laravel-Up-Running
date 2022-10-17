// 예제 5-49 쿼리 결과에 속성값 형변환 지정

$users = User::select(['id', 'name', 'vip'])->withCasts([
    'vip' => 'bool'
])->get();
// vip 속성값은 불리언 값이 된다.
