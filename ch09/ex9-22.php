// 예제 9-22 User 인스턴스를 사용하여 인가 확인하기

$user = User::find(1);

if ($user->can('create-contact')) {
    // 코드
}
