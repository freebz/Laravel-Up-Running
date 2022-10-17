// 예제 5-71 목록을 출력하는 반복문 안에서 연관 모델을 조회하기(N+1)

$contacts = Contact::all();

foreach ($contacts as $contact) {
    foreach ($contact->phone_numbers as $phone_number) {
        echo $phone_number->number;
    }
}
