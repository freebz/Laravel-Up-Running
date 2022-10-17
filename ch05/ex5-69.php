// 예제 5-69 다대다 다형성 연관관계의 각각의 모델에서 연관관계 모델을 조회하는 방법

$contact = Contact::first();

$contact->tags->each(function ($tag) {
    // 코드 실행
});

$tag = Tag::first();
$tag->contacts->each(function ($contact) {
    // 코드 실행
});
