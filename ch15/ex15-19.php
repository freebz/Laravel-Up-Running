// 예제 15-19 사용자의 데이터베이스 알림 순회하기

User::first()->notifications->each(function ($notification) {
    // 무엇인가 한다.
});
