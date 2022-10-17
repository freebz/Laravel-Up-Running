// 예제 5-65 다형성 연관관계 모델 인스턴스 조회하기

$contact = Contact::first();

$contact->stars->each(function ($star) {
    // 필요한 코드 작성
});
