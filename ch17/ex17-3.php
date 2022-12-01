// 예제 17-3 라라벨의 컬렉션을 이용한 foreach 반복문 리팩터링

$users = collect([...]);

return $users->filter(function ($user) {
    return $user['status'] == 'admin';
})->map(function ($user) {
    $user['name'] = $user['first'] . ' ' . $user['last'];
    return $user;
});
