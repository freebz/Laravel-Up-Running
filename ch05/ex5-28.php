// 예제 5-28 인스턴스를 생성하여 새로운 레코드를 추가하는 방법

$contact = new Contact;
$contact->name = 'Ken Hirata';
$contact->email = 'ken@hirata.com';
$contact->save();

// 또는

$contact = new Contact([
    'name' => 'Ken Hirata',
    'email' => 'ken@hirata.com',
]);
$contact->save();

// 또는

$contact = Contact::make([
    'name' => 'Ken Hirata',
    'email' => 'ken@hirata.com',
]);
$contact->save();
