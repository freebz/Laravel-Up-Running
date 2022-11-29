// 예제 16-32 에코를 이용해서 비공개 채널 수신하기

var currentTeamId = 5; // 다른 곳에서 설정할 수 있음

Echo.private(`teams.${currentTeamId}`)
  .listen('UserSubscribed', (data) => {
    console.log(data);
  });
