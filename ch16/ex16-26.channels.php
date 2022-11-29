// 예제 16-26 비공개와 존재 웹소켓 채널을 위한 인가 규칙 정의하기

...
// routes/channels.php

// 비공개 채널 인증 방법 정의
Broadcast::channel('teams.{teamId}', function ($user, $teamId) {
    return (int) $user->team_id === (int) $teamId;
});

// 프리젠스 채널 인증 방법 문의
// 사용자와 관련해 채널에서 사용하고자 하는 데이터 반환
Broadcast::channel('rooms.{roomId}', function ($user, $roomId) {
    if ($user->rooms->contains($roomId)) {
        return [
            'name' => $user->name
        ];
    }
});
