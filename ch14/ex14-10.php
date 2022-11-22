// 예제 14-10 글로벌 cache() 헬퍼 사용하기

// 캐시에서 가져오기
$users = cache('key', 'default value');
$users = cache()->get('key', 'default value');
// $seconds 동안 저장하기
$users = cache(['key' => 'value'], $seconds);
$users = cache()->put('key', 'value', $seconds);
