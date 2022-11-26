// 예제 15-21 데이터베이스 알림을 읽은 것으로 표시하기

// 개별
User::first()->unreadNotifications->each(function ($notification) {
    if ($condition) {
        $notification->markAsRead();
    }
});

// 전체
User::first()->unreadNotifications->markAsRead();
