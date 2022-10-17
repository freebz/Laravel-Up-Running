// 예제 5-29 create() 메서드에 배열을 전달해 인스턴스를 생성하고 데이터베이스에 저장하기

$contact = Contact::create([
    'name' => 'Keahi Hale',
    'email' => 'halek481@yahoo.com',
]);
