<!-- 예제 16-27 비공개 채널과 프리젠스 채널에 대한 푸셔 기본 사용법 -->

...
<script src="https://js.pusher.com/4.3/pusher.min.js"></script>
<script>
    // 푸셔 로그 활성화 - 프로덕션 환경에서는 사용하지 말 것
    Pusher.logToConsole = true;

    // 글로벌로. 그저 데이터를 가져오는 방법에 대한 예시임
    var App = {
        'userId': {{ auth()->id() }},
        'pusherKey': '{{ config('broadcasting.connections.pusher.key' }}'
    };

    // 로컬로
    var pusher = new Pusher(App.pusherKey, {
        cluster: '{{ config('broadcasting.connections.pusher.options.cluster' }}',
        encrypted: {{ config('broadcasting.connections.pusher.key' }},
        authEndpoint: '/broadcasting/auth'
    });

    // 비공개 채널
    var privateChannel = pusher.subscribe('private-teams.1');

    privateChannel.bind('App\\Events\\UserSubscribed', (data) => {
        console.log(data.user, data.plan);
    });
    
    // 프레젠스 채널
    var presenceChannel = pusher.subscribe('presence-rooms.5');

    console.log(presenceChannel.members);
</script>
