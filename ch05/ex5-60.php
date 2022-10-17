// 예제 5-60 다대다 연관관계인 각각의 모델에서 연관관계 컬렉션을 조회하는 방법

$user = User::first();

$user->contacts->each(function ($contact) {
    // 코드 실행
});

$contact = Contact::first();

$contact->users->each(function ($user) {
    // 코드 실행
});

$donors = $user->contacts()->where('status', 'donor')->get();
