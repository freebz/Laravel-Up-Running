// 예제 16-25 엑시오스나 제이쿼리로 소켓 ID를 Ajax 요청마다 함께 전송하기

// 에코를 초기화한 후 실행할 것
// Axios를 사용하는 방법
window.axios.defaults.headers.common['X-Socket-Id'] = Echo.socketId();

// 제이쿼리를 사용하는 방법
$.ajaxSetup({
    headers: {
        'X-Socket-Id': Echo.socketId()
    }
});
