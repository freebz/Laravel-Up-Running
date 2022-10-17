// 예제 5-66 다형성 연관관계 모델에서 대상 모델 인스턴스 조회

$stars = Star::all();

$stars->each(function ($star) {
    var_dump($star->starrable); // Contact 또는 Event 인스턴스
});
