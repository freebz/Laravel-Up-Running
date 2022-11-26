// 예제 5-20 사용자가 읽지 않은 데이터베이스 알림 순회하기

User::first()->unreadNotifications->each(function ($notification) {
    // 무엇인가 한다.
});
