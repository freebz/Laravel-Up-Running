// 예제 14-8 글로벌 session() 헬퍼 사용하기

// 조회(get)
$value = session()->get('key');
$value = session('key');
// 저장(put)
session()->put('key', 'value');
session(['key', 'value']);
