// 예제 16-35 에코를 이용해서 알림 수신하기

Echo.private(`App.User.${userId}`)
  .notification((notification) => {
    console.log(notification.type);
  });
