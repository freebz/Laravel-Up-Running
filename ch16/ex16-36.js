// 예제 16-36 에코의 whisper() 메서드를 사용해서 라라벨 서버를 거치지 않고 메시지 보내기

Echo.private('room')
  .whisper('typing', {
    name: this.user.name
  });
