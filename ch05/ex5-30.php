// 예제 5-30 엘로퀀트 인스턴스를 조회하고 save() 메서드를 호출하여 레코드를 수정하기

$contact = Contact::find(1);
$contact->email = 'natalie@parkfamily.com';
$contact->save();
