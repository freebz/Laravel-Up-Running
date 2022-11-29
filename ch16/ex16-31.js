// 예제 16-31 에코에서 여러 이벤트 리스너 연결하기

Echo.channel(`teams.${currentTeamId}`)
  .listen('UserSubscribed', (data) => {
    console.log(data);
  })
  .listen('UserCanceled', (data) => {
    console.log(data);
  });
