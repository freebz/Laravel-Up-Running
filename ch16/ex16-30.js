// 예제 16-30 에코를 이용해서 공개 채널 수신하기

var currentTeamId = 5; // 다른 곳에서 설정할 수 있음

Echo.channel(`teams.${currentTimeId}`)
  .listen('UserSubscribed', (data) => {
    console.log(data);
  });
