// 예제 16-37 에코를 사용해서 whisper 수신하기

Echo.private('room')
  .listenForWhisper('typing', (e) => {
    console.log(e.name);
  });
