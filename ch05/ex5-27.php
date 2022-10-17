// 예제 5-27 chunk() 메서드를 활용하여 좀 더 적은 메모리 자원을 사용하는 방법

Contact::chunk(100, function ($contacts) {
    foreach ($contacts as $contact) {
        // $contact로 무언인가 한다.
    }
});
