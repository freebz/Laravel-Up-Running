// 예제 16-34 특정 프렌젠스 이벤트 수신하기

var currentTeamId = 5; // 다른 곳에서 설정할 수 있음

Echo.join('teams.' + currentTeamId)
  .here((members) => {
    // 여러분이 채널에 참여할 때 실행
    console.table(members);
  })
  .joining((joiningMember, members) => {
    // 다른 멤버가 참여할 때 실행
    console.table(joiningMember);
  })
  .leaving((leavingMember, members) => {
    // 다른 멤버가 떠날 때 실행
    console.table(leavingMember);
  });
