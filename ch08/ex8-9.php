// 예제 8-9 아티즌 명령어에서 테이블 형태로 출력하는 예제

$headers = ['이름', '이메일'];

$data = [
    ['Dhriti', 'dhriti@amrit.com'],
    ['Moses', 'moses@gutierez.com'],
];

// 데이터베이스에서 비슷한 데이터를 가져올 수도 있다.
$data = App\Models\User::all(['name', 'email'])->toArray();

$this->table($headers, $data);
