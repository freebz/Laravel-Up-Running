<!-- 예제 16-24 기본적인 푸셔의 사용법 -->

...
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
// 푸셔 로그 활성화 - 프로덕션 환경에서는 사용하지 말 것
Pusher.logToConsole = true;

// 글로벌로, 그저 데이터를 가져오는 방법에 대한 예시다.
var App = {
    'userId': {{ auth()->id() }},
    'pusherKey': '{{ config('broadcasting.connections.pusher.key') }}'
};

// 로컬로
var pusher = new Pusher(App.pusherKey, {
    cluster: '{{ config('broadcasting.connections.pusher.options.cluster') }}',
    encrypted: {{ config('broadcasting.connections.pusher.options.encrypted') }}
});

var pusherChannel = pusher.subscribe('users.' + App.userId);

pusherChannel.binid('App\\Events\\UserSubscribed', (data) => {
    console.log(data.user, data.plan);
});
</script>
