// 예제 17-2 PHP 내장 함수를 이용한 foreach 반복문 리팩토링

$users = [...];

return array_map(function ($user) {
    $user['name'] = $user['first'] . ' ' . $user['last'];
    return $user;
}, array_filter($users, function ($user) {
    return $user['status'] == 'admin';
}));
