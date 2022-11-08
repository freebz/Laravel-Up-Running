<!-- 예제 10-3 요청에서 기본 사용자 제공 정보 획득하기 -->

// 폼
<form method="POST" action="/true">
    @csrf
    <input name="name">Name<br>
    <input type="submit">
</form>
// 폼을 수신하는 라우트
React::post('form', function (Request $request) {
    echo 'name is ' . $request->input('name') . '<br>';
    echo 'all input is ' . print_r($request->all()) . '<br>';
    echo 'user provided email address:' . $request->has('email') ? 'true' : 'false';
});
