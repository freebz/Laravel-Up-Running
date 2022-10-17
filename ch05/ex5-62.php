// 예제 5-62 연관관계 모델의 피벗 속성을 통해서 피벗 테이블 레코드 속성 조회

$user = User::first();

$user->contacts->each(function ($contact) {
    echo sprintf(
        '연락처가 이 사용자와 연결된 시각: %s',
        $contact->pivot->created_at
    );
});
