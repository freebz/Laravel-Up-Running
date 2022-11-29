// 예제 16-33 프레젠스 채널에 참여하기

var currentTeamId = 5; // 다른 곳에서 설정할 수 있음

Echo.join(`teams.${currentTeamId}`)
  .here((members) => {
    console.log(members);
  });
